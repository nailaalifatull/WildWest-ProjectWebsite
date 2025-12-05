<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild West Reads - About Us</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url('back_about.png');
            background-color: #3f090d;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            color: #FFFFFF;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .header {
            background-color: #5d0f17;
            padding: 10px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Metal Mania', cursive;
            font-size: 20px;
            z-index: 50;
        }

        .logo {
            display: flex;
            gap: 5px;
        }
        .logo img {
            width: 30px;
            height: 30px;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            color: #FFFFFF;
            text-decoration: none;
            margin-left: 30px;
            padding-bottom: 5px;
            transition: border-bottom 0.3s;
        }

        .nav-links a:hover, .nav-links a.active {
            border-bottom: 2px solid #FFFFFF;
        }

        .user-icon {
            margin-left: 30px;
            cursor: pointer;
        }
        
        .user-icon img {
            width: 30px;
            height: 30px;
            vertical-align: middle;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
        }

        .rope-circle {
            position: absolute;
            width: 600px;
            height: 600px;
            background-image: url('../assets/rope.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            z-index: 5;
        }

        .cowboy-left {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30%;
            height: 100%;
            background-image: url('../assets/cowboy4.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: left bottom;
            z-index: 10;
        }

        .cowboy-right {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 30%;
            height: 100%;
            background-image: url('../assets/cowboy3.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right bottom;
            z-index: 10;
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
            color: #FFFFFF;
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
            transition: background-color 0.3s;
        }

        .footer-nav a:hover {
            background-color: #6a3a24;
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="../assets/logo.png" alt="Logo">
            <img src="../assets/logo.png" alt="Logo">
        </div>

        <nav class="nav-links">
        <a href="home.php" class="active">Home</a>
        <a href="about_us.php">About Us</a>
        <a href="product.php">Product</a>

        <a href="login.html" class="user-icon icon-user"></a>
        </nav>
    </header>
        </nav>
    </header>

    <div class="main-content">
        <div class="cowboy-left"></div>
        <div class="rope-circle"></div>

        <div class="about-content">
            <h2>About Us</h2>
            <p>
                This website provides information about our cowboy-themed products and characters.
                We aim to deliver quality content, attractive design, and a smooth user experience.
            </p>
        </div>

        <div class="cowboy-right"></div>

        <div class="footer-nav">
            <a href="#">&lt; Back</a>
            <a href="#">Next &gt;</a>
        </div>
    </div>

</body>
</html>
