<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild West Reads</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url('../assets/home-bg.jpg'); 
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            color: #F5E3C8;
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
            font-family: 'Metal Mania', cursive;
            font-size: 20px;
        }

        .logo {
            width: 40px;
            height: 40px;
        }
        .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .nav-links a {
            color: #F5E3C8;
            text-decoration: none;
            margin-left: 30px;
            padding-bottom: 5px;
            border-bottom: 1px solid transparent;
            transition: border-bottom 0.3s;
        }

        .nav-links a:hover, .nav-links a.active {
            border-bottom: 1px solid #F5E3C8;
        }

        .user-icon {
            margin-left: 30px;
            cursor: pointer;
            font-size: 22px;
            text-decoration: none;
            color: #F5E3C8;
        }

        .user-icon:hover {
            opacity: 0.7;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 10%;
            position: relative;
        }

        .hero-text {
            text-align: right;
            line-height: 1.2;
            padding-bottom: 150px;
        }

        .hero-text h1 {
            font-family: 'Metal Mania', cursive;
            font-size: 7vw;
            color: #F5E3C8;
            margin: 0;
            text-shadow: 
                -1px -1px 0 #000,
                 1px -1px 0 #000,
                -1px  1px 0 #000,
                 1px  1px 0 #000,
                 0 0 10px rgba(0,0,0,0.5);
        }

        .hero-text p {
            font-family: 'Metal Mania', cursive;
            font-size: 3.5vw;
            color: #F5E3C8;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            text-shadow: 
                -1px -1px 0 #000,
                 1px -1px 0 #000,
                -1px  1px 0 #000,
                 1px  1px 0 #000;
        }

        .tomb-icon {
            margin-right: 5px;
            width: 1.5em;
            height: 1.5em;
        }
        .tomb-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .next-button {
            position: absolute;
            bottom: 30px;
            right: 40px;
            padding: 10px 20px;
            background-color: #4a2818;
            color: #F5E3C8;
            text-decoration: none;
            font-family: 'Metal Mania', cursive;
            font-size: 20px;
            border: 1px solid #F5E3C8;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .next-button:hover {
            background-color: #6a3a24;
        }

        .cowboy-image {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            background-image: url('../assets/home-bg.png');
            background-size: cover;
            background-position: left center;
            z-index: -1;
            box-shadow: 10px 0 20px rgba(0, 0, 0, 0.5) inset;
        }

        .icon-user:before { content: '👤'; } 
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="../assets/logo.png" alt="Wild West Logo">
        </div>

        <nav class="nav-links">
            <!-- S U D A H   B I S A   P I N D A H   H A L A M A N -->
            <a href="home.php" class="active">Home</a>
            <a href="about_us.php">About Us</a>
            <a href="product.php">Product</a>

            <!-- USER ICON -->
            <a href="login.html" class="user-icon icon-user"></a>
        </nav>
    </header>

    <div class="main-content">

        <div class="cowboy-image"></div>

        <div class="hero-text">
            <p>
                Say Hello t
                <span class="tomb-icon">
                    <img src="../assets/logo2.png" alt="Icon">
                </span>
            </p>
            <h1>WildWest Reads</h1>
        </div>

        <a href="about_us.php" class="next-button">Next ></a>
    </div>

</body>
</html>
