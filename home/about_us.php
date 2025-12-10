<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild West Reads - About Us</title>

    <!-- Google Fonts (sama seperti HOME) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url('../assets/back_about.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0; 
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: #5d0f17;
            padding: 10px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 55px;
            height: 55px;
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

        .cowboy-left,
        .cowboy-right {
            position: absolute;
            bottom: 0;
            width: 28%;
            height: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 10;
        }

        .cowboy-left {
            left: 0;
            background-image: url('../assets/cowboy4.png');
            background-position: left bottom;
        }

        .cowboy-right {
            right: 0;
            background-image: url('../assets/cowboy3.png');
            background-position: right bottom;
        }

        .about-content {
            z-index: 15;
            max-width: 500px;
            padding: 20px;
            font-family: 'Metal Mania', cursive;
        }

        .about-content h2 {
            font-size: 5vw;
            color: #C0C0C0;
            margin-bottom: 30px;
            text-shadow:
                -1px -1px 0 #000,
                 1px -1px 0 #000,
                -1px  1px 0 #000,
                 1px  1px 0 #000;
        }

        .about-content p {
            font-size: 1.8vw;
            line-height: 1.6;
            text-shadow: 1px 1px 2px #000;
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
            font-family: 'Metal Mania', cursive;
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

        <nav class="nav-links">
            <a href="home.php">Home</a>
            <a href="about_us.php" class="active">About Us</a>
            <a href="product.php">Product</a>
            <a href="login.html" class="user-icon"></a>
        </nav>
    </header>

    <div class="main-content">
        <div class="cowboy-left"></div>

        <div class="about-content">
            <h2>About Us</h2>
            <p>
                This website provides information about our cowboy-themed products and characters.
                We aim to deliver quality content, attractive design, and a smooth user experience.
            </p>
        </div>

        <div class="cowboy-right"></div>

        <div class="footer-nav">
            <a href="home.php">&lt; Back</a>
            <a href="product.php">Next &gt;</a>
        </div>
    </div>

</body>
</html>
