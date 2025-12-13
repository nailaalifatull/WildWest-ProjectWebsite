<?php
session_start();
include "../backend/config.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../awal/login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$user_id'");
$user  = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - Wild West Reads</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../assets/back_profile.png');
            background-size: cover;
            background-position: center;
            font-family: "Abhaya Libre", serif;
        }
        /* -------------------
           TITLE EDIT PROFILE
           ------------------- */
        .title {
            font-family: "Abhaya Libre", cursive;
            font-size: 50px;
            text-align: center;
            margin-top: 30px;
            color: #f7f1e9;
            text-shadow: 4px 4px 5px #000;
        }

        /* FOTO PROFILE BULAT */
        .profile-pic-container {
            margin: 20px auto;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: #d9d9d9;
            position: relative;
        }

        .camera-btn {
            position: absolute;
            right: 5px;
            bottom: 5px;
            background: #f6dbb1;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        /* FORM LABEL */
        label {
            font-family: "Rye", cursive;
            color: #fcead3;
            font-size: 30px;
        }

        /* INPUT STYLE */
        .input-box {
            width: 60%;
            padding: 10px 18px;
            background: #520e0e;
            border: 3px dashed #f5e3c8;
            color: #ffffff;
            font-size: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            display: block;

            margin-left: auto;   /* ← Bikin center */
            margin-right: auto;  /* ← Bikin center */
        }

        /* WRAPPER FORM */
        .form-container {
            width: 60%;
            margin: auto;
            text-align: center;  
        }

        .form-row {
            width: 60%;            /* semua label + input mulai dari titik yang sama */
            margin: 0 auto 25px;   /* center */
            text-align: left;      /* tapi isi tetap rata kiri */
        }

        .form-row label {
            display: block;
            font-family: "Rye", cursive;
            color: #fcead3;
            font-size: 28px;
            margin-bottom: 5px;
        }

        .form-row .input-box {
            width: 100%;     /* mengikuti lebar form-row */
            margin: 0;       /* hilangkan margin auto sebelumnya */
        }

        label {
            margin-left: 5px;
        }


        /* BACK BUTTON */
        .back-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #4a2818;
            color: #fff;
            padding: 10px 25px;
            border-radius: 12px;
            font-size: 22px;
            font-family: "Rye", cursive;
            text-decoration: none;
            border: 2px solid #F5E3C8;
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="header">
        <div class="logo">
            <img src="../assets/logo.png">
            <img src="../assets/logo.png">
            <img src="../assets/logo.png">
        </div>

        <?php include "../layout/navbar.php"; ?>

    </header>

    <!-- TITLE -->
    <div class="title">Edit Profile</div>

    <!-- FOTO PROFIL -->
    <div class="profile-pic-container">
        <div class="camera-btn">📷</div>
    </div>

    <!-- FORM -->
    <form action="../backend/update_profile.php" method="POST">
        <div class="form-row">
            <label>Username</label>
            <input type="text" name="username" class="input-box"
                value="<?= htmlspecialchars($user['full_name']); ?>" required>
        </div>
        <div class="form-row">
            <label>Email</label>
            <input type="email" name="email" class="input-box"
                value="<?= htmlspecialchars($user['email']); ?>" required>
        </div>
        <div class="form-row">
            <label>Password (New)</label>
            <input type="password" name="password" class="input-box"
                placeholder="Leave blank if not changing">
        </div>
        <button type="submit" class="back-btn"
                style="right:20px; left:auto;">Save</button>
    </form>


    <!-- BACK BUTTON -->
    <a href="../backend/logout.php" class="back-btn" style="bottom:80px;">Logout</a>
    <a href="../home/home.php" class="back-btn">‹ Back</a>

</body>
</html>
