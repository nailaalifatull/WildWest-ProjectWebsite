<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../awal/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild West Reads - About Us</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <style>
        body {
            overflow: hidden;   
            background-image: url('../assets/back_about1.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            padding: 0; 
            min-height: 100vh;
            display: flex;
            flex-direction: column; 
        }

        .header {
            background-color: #5d0f17AA;
            padding: 10px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            font-family: "Jacquard 12", cursive;
            font-size: 35px;
        }

        .nav-links a {
            color: #FFFFFF;
            text-decoration: none;
            margin-left: 35px;
            padding-bottom: 5px;
            transition: 0.3s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            border-bottom: 2px solid #FFFFFF;
        }

        .user-icon {
            margin-left: 35px;
            cursor: pointer;
        }

        .user-icon::before {
            content: '👤';
            font-size: 28px;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
        }

        .cowboy-left {
            left: -100px;
            background-image: url('../assets/cowboy4.png');
            background-position: left bottom;
            position: absolute;
            bottom: 0;
            width: 33%;
            height: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 1;
        }

        .cowboy-right {
            right: -50px;
            background-image: url('../assets/cowboy3.png');
            background-position: right bottom;
            position: absolute;
            bottom: 0;
            width: 35%;
            height: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 1;
        }

        .about-content {
            z-index: 15;
            max-width: 500px;
            padding: 20px;
            font-family: 'Abhaya Libre', cursive;
        }

        .about-content h2 {
            font-size: 4.5vw;
            font-family: 'Rye', cursive;
            color: #E1D9CC;
            margin-bottom: 25px;
            text-shadow: 1px 1px 2px #100e0aff;
        }

        .about-content p {
            font-size: 1.8vw;
            line-height: 1.6;
            color : #eeccb7ff;
            text-shadow: 1px 1px 2px #f19d20ff;
        }

        .footer-nav {
            position: absolute;
            bottom: 30px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 40px;
            z-index: 20;
        }

        .footer-nav a {
            padding: 10px 20px;
            background-color: #4a2818;
            color: #FFFFFF;
            text-decoration: none;
            font-family: 'Rye', cursive;
            font-size: 20px;
            border: 1px solid #FFFFFF;
            border-radius: 5px;
            transition: 0.3s;
        }

        .footer-nav a:hover {
            background-color: #6a3a24;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="../assets/logo.png" alt="Wild West Logo">
            <img src="../assets/logo.png" alt="Wild West Logo">
        </div>

        <?php include "../layout/navbar.php"; ?>

    </header>

    <div class="main-content">
        
        <div class="about-content">
            <h2>About Us</h2>
            <p>
                This website provides information about our cowboy-themed products and characters.
                We aim to deliver quality content, attractive design, and a smooth user experience.
            </p>
        </div>
        
        
        <div class="footer-nav">
            <a href="home.php">&lt; Back</a>
            <a href="product.php">Next &gt;</a>
        </div>
        <div class="cowboy-right"></div>
        <div class="cowboy-left"></div>
    </div>

</body>
</html>