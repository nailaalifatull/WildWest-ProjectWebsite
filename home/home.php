<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild West Reads</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Rye -->
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">

    <!-- Font Abhaya Libre ExtraBold -->
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">

    <!-- Font Jacquard 12 -->
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

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

        body::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(85, 32, 32, 0.75); /* ubah opacity di sini */
            z-index: -1;
        }

        /* Semua elemen di atas overlay */
        body, .header, .main-content {
            position: relative;
            z-index: 1;
        }

        /* HEADER */
        .header {
            background-color: #5d0f17;
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
            margin-left: 30px;
            padding-bottom: 5px;
            transition: border-bottom 0.3s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            border-bottom: 2px solid #FFFFFF;
        }

        .user-icon {
            margin-left: 30px;
            cursor: pointer;
        }

        .user-icon::before {
            content: '👤';
            font-size: 26px;
        }

        /* MAIN CONTENT */
        .main-content {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 10%;
            position: relative;
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

        /* HERO TEXT */
        .hero-text {
            text-align: right;
            padding-bottom: 150px;
        }

        .hero-text p {
            margin: 0;
        }

        /* SAY HELLO (Rye) */
        .hero-text .sayhello {
            font-family: "Rye", cursive;
            font-size: 3.5vw;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            text-shadow:
                -1px -1px 0 #000,
                 1px -1px 0 #000,
                -1px 1px 0 #000,
                 1px 1px 0 #000;
        }

        .tomb-icon img {
            width: 1.6em;
            margin-left: 6px;
        }

        /* WILD WEST READS (Rye) */
        .hero-text .brand {
            font-family: "Rye", cursive;
            font-size: 4vw;
            text-shadow:
                -1px -1px 0 #000,
                 1px -1px 0 #000,
                -1px 1px 0 #000,
                 1px 1px 0 #000,
                 0 0 10px rgba(0,0,0,0.5);
        }

        /* HOWDY TEXT (Abhaya Libre ExtraBold) */
        .hero-text .howdy {
            margin-top: 15px;
            font-family: "Abhaya Libre", serif;
            font-size: 1.8vw;
            font-weight: 800;
            text-shadow:
                -1px -1px 0 #000,
                 1px -1px 0 #000,
                -1px 1px 0 #000,
                 1px 1px 0 #000;
        }

        /* NEXT BUTTON */
        .next-button {
            position: absolute;
            bottom: 30px;
            right: 40px;
            padding: 10px 20px;
            background-color: #4a2818;
            color: #F5E3C8;
            text-decoration: none;
            font-family: "Rye", cursive;
            font-size: 20px;
            border: 1px solid #F5E3C8;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .next-button:hover {
            background-color: #6a3a24;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="../assets/logo.png" alt="Wild West Logo">
        </div>

        <nav class="nav-links">
            <a href="home.php" class="nav-home">Home</a>
            <a href="about_us.php" class="nav-about">About Us</a>
            <a href="product.php" class="nav-product">Product</a>
            <a href="login.html" class="user-icon"></a>
        </nav>
    </header>

    <div class="main-content">

        <div class="cowboy-image"></div>

        <div class="hero-text">

            <!-- SAY HELLO -->
            <p class="sayhello">
                Say Hello t 
                <span class="tomb-icon">
                    <img src="../assets/logo2.png" alt="Icon">
                </span>
            </p>

            <p class="brand">WildWest Reads</p>

            <!-- HOWDY -->
            <p class="howdy">
                Howdy, cowboy! Ready to roam <br>
                the WildWest Reads once more?
            </p>

        </div>

        <a href="about_us.php" class="next-button">Next ></a>
    </div>

</body>
</html>
