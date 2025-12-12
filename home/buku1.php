<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Buku - Wild West Reads</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">
    
    <style>
        body {
            overflow: hidden;   
            background-image: url('../assets/back_books.png');
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

        /* CONTENT */
        .container {
            margin-top: 130px;
            display: flex;
            align-items: center;
            gap: 40px;
            padding: 40px;
        }

        .book-img img {
            width: 270px;
            border-radius: 6px;
            box-shadow: 0 0 18px rgba(0, 0, 0, 0.8);
        }

        .info-box {
            background: rgba(90, 0, 20, 0.8);
            padding: 40px;
            border-radius: 12px;
            max-width: 750px;
            backdrop-filter: blur(4px);
        }

        .info-box h2 {
            font-size: 34px;
            margin: 0;
            font-family: 'Playfair Display', serif;
        }

        .author {
            font-size: 22px;
            margin-top: 6px;
            color: #eac7bb;
        }

        .stars {
            margin: 12px 0;
            font-size: 22px;
            color: gold;
        }

        .desc {
            margin-top: 12px;
            font-size: 19px;
            line-height: 1.6;
        }

        .genre {
            margin-top: 18px;
            font-size: 19px;
        }

        .rating-btn {
            margin-top: 25px;
            display: inline-block;
            background: #6a3a28;
            padding: 10px 25px;
            border-radius: 6px;
            font-size: 20px;
            color: #fff;
            text-decoration: none;
            border: 2px solid #c9a189;
        }

        .rating-btn:hover {
            background: #402017;
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
            <a href="profile.php" class="user-icon"></a>
        </nav>
    </header>

    <div class="container">
        <div class="book-img">
            <img src="../assets/buku1.png" alt="Book Cover">
        </div>

        <div class="info-box">
            <h2>Jonah Hex: Two-Gun Mojo</h2>
            <div class="author">By <u>Joe R. Lansdale</u></div>

            <div class="stars">★★★★★ 3.99</div>

            <div class="desc">
                Shipped from UK, please allow 10 to 21 business days for arrival. Jonah Two
                Gun Mojo (DC Comics Vertigo (Paperback) 1994). Collects Jonah Hex Two Gun Mojo issues 1–5.
                Very good condition except very slight signs of previous sticker removal.
            </div>

            <div class="genre">
                <b>Genre:</b> Comics, Graphic Novel Westerns, Horror, Weird West, Fiction
            </div>

            <a class="rating-btn" href="#">Rating →</a>
        </div>
    </div>

</body>
</html>
