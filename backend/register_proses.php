<?php
include "config.php";

$full_name = $_POST['full_name'];
$email     = $_POST['email'];
$password  = password_hash($_POST['password'], PASSWORD_DEFAULT);

$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
if (mysqli_num_rows($check) > 0) {
    echo "<script>alert('Email already used!'); window.location='../register.php';</script>";
    exit;
}

$query = mysqli_query($conn, "INSERT INTO users(full_name, email, password) VALUES ('$full_name', '$email', '$password')");

if ($query) {
    echo "<script>alert('Account created successfully!'); window.location='../awal/login.php';</script>";
} else {
    echo "<script>alert('Failed to register!'); window.location='../awal/register.php';</script>";
}
?>
