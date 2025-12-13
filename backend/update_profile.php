<?php
session_start();
include "config.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../awal/login.php");
    exit;
}

$user_id  = $_SESSION['user_id'];
$full_name = $_POST['full_name'];
$email    = $_POST['email'];
$password = $_POST['password'];

$check = mysqli_query($conn,
    "SELECT id FROM users WHERE email='$email' AND id != '$user_id'"
);

if (mysqli_num_rows($check) > 0) {
    echo "<script>alert('Email already in use!'); window.location='../home/profile.php';</script>";
    exit;
}

if (empty($password)) {
    $query = mysqli_query($conn,
        "UPDATE users SET username='$username', email='$email' WHERE id='$user_id'"
    );
} else {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = mysqli_query($conn,
        "UPDATE users SET username='$username', email='$email', password='$hash' WHERE id='$user_id'"
    );
}

if ($query) {
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;

    echo "<script>alert('Profile updated successfully!'); window.location='../home/profile.php';</script>";
} else {
    echo "<script>alert('Failed to update profile!'); window.location='../home/profile.php';</script>";
}
