<?php
session_start();
include "config.php";

$email    = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user  = mysqli_fetch_assoc($query);

if ($user) {
    if (password_verify($password, $user['password'])) {

        $_SESSION['user_id']   = $user['id'];
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['email']     = $user['email'];

        header("Location: ../home/home.php");
        exit;

    } else {
        echo "<script>alert('Wrong password!'); window.location='../awal/login.php';</script>";
    }
} else {
    echo "<script>alert('Email not registered!'); window.location='../awal/login.php';</script>";
}
