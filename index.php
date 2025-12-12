<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild West Reads - Landing Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <style>
        * {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #F5E3C8;
        }

        /* ================== NAVBAR ================== */
        .header {
            background-color: #5d0f17cc;
            padding: 10px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap : 25px;
            font-family: "Jacquard 12", cursive;
            font-size: 35px;
        }

        .nav-links a {
            color: #FFFFFF;
            text-decoration: none;
            margin-left: 20px;
            padding-bottom: 4px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            border-bottom: 2px solid #FFFFFF;
        }

        .nav-links a.icon {
            margin-left: 15px;
            padding: 0;
        }

        .nav-links a.icon img {
            width: 28px;
            height: 28px;
            object-fit: contain;
        }



        /* ================== SECTION HOME ================== */

        #home {
            height: 100vh;
            background-image: url('assets/home-bg.png');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding-right: 10%;
        }

        #home::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(85, 32, 32, 0.75);
        }

        #home .content {
            text-align: right;
            position: relative;
            z-index: 10;
        }

        .sayhello {
            font-family: "Rye", cursive;
            font-size: 3.5vw;
            text-shadow: 0 0 5px #000;
        }

        .hero-text {
            text-align: right;
            padding-bottom: 150px;
        }

        .hero-text p {
            margin: 0;
        }

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

        .brand {
            font-family: "Rye", cursive;
            font-size: 4vw;
            text-shadow: 0 0 10px #000;
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

        .tomb-icon img {
            width: 1.6em;
            margin-left: 6px;
        }

        /* ================== SECTION ABOUT ================== */

        #about {
            height: 100vh;
            background-image: url('assets/back_about1.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding-top: 130px;
            position: relative;
        }

        #about h2 {
            font-family: "Rye";
            font-size: 4.5vw;
            color: #E1D9CC;
            text-shadow: 1px 1px 2px #000;
        }

        #about p {
            max-width: 600px;
            margin: auto;
            font-size: 1.8vw;
            color: #eeccb7;
            text-shadow: 1px 1px 2px #000;
        }


        /* ================== SECTION PRODUCT ================== */

        #products {
            min-height: 100vh;
            background-image: url('assets/back_product.jpg');
            background-size: cover;
            background-position: center;
            padding-top: 150px;
            padding-bottom: 80px;
        }

        .title {
            text-align: center;
            font-family: "Jacquard 12";
            font-size: 90px;
            color: #f7f1e9;
            text-shadow: 4px 4px 5px #000;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .card {
            background: #f9efe0;
            border: 5px solid #7a0e25;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.25);
        }

        .card img {
            width: 70%;
            border-radius: 10px;
        }

        .rating {
            margin: 10px 0;
            font-size: 20px;
            color: #d67d1d;
        }

        .title-book {
            font-size: 17px;
            font-weight: bold;
        }

        .arrow {
            font-size: 25px;
            cursor: pointer;
            font-weight: bold;
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="header">
        <div class="logo">
            <img src="assets/logo.png">
        </div>

        <nav class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#products">Product</a>

        <!-- PROFIL ICON -->
            <a href="home/profile.php" class="icon">
                <img src="user.png" alt="User Icon">
        </a>
    </nav>
</header>

    <!-- ================= HOME SECTION ================= -->
    <section id="home">
        <div class="cowboy-image"></div>
        <div class="hero-text">
            <!-- SAY HELLO -->
            <p class="sayhello">
                Say Hello t 
                <span class="tomb-icon">
                    <img src="assets/logo2.png" alt="Icon">
                </span>
            </p>
            <p class="brand">WildWest Reads</p>

            <!-- HOWDY -->
            <p class="howdy">
                Howdy, cowboy! Ready to roam <br>
                the WildWest Reads once more?
            </p>
            <a href="#about" class="next-button">Next ></a>

        </div>
    </section>

    <!-- ================= ABOUT SECTION ================= -->
    <section id="about">
        <h2>About Us</h2>
        <p>
            This website provides information about our cowboy-themed products and characters.
            We aim to deliver quality content, attractive design, and a smooth user experience.
        </p>
    </section>

    <!-- ================= PRODUCT SECTION ================= -->
    <section id="products">
        <div class="title">Books</div>

        <div class="container">
            <div class="grid">

                <div class="card">
                    <img src="assets/book1.jpg">
                    <div class="rating">★★★★★</div>
                    <div class="title-book">Judul Buku 1</div>
                    <div class="arrow">→</div>
                </div>

                <div class="card">
                    <img src="assets/book2.jpg">
                    <div class="rating">★★★★☆</div>
                    <div class="title-book">Judul Buku 2</div>
                    <div class="arrow">→</div>
                </div>

                <div class="card">
                    <img src="assets/book3.jpg">
                    <div class="rating">★★★★☆</div>
                    <div class="title-book">Judul Buku 3</div>
                    <div class="arrow">→</div>
                </div>

                <div class="card">
                    <img src="assets/book4.jpg">
                    <div class="rating">★★★★☆</div>
                    <div class="title-book">Judul Buku 4</div>
                    <div class="arrow">→</div>
                </div>

                <div class="card">
                    <img src="images/book1.jpg">
                    <div class="rating">★★★★★</div>
                    <div class="title-book">Judul Buku 5</div>
                    <div class="arrow">→</div>
                </div>

                <div class="card">
                    <img src="images/book2.jpg">
                    <div class="rating">★★★★☆</div>
                    <div class="title-book">Judul Buku 6</div>
                    <div class="arrow">→</div>
                </div>

                <div class="card">
                    <img src="images/book3.jpg">
                    <div class="rating">★★★★☆</div>
                    <div class="title-book">Judul Buku 7</div>
                    <div class="arrow">→</div>
                </div>

                <div class="card">
                    <img src="images/book4.jpg">
                    <div class="rating">★★★★☆</div>
                    <div class="title-book">Judul Buku 8</div>
                    <div class="arrow">→</div>
                </div>

            </div>
        </div>
    </section>

</body>
</html>


