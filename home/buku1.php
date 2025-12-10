<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Buku - Wild West Reads</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Crimson+Text:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Crimson Text', serif;
            background: url('your-background.jpg') no-repeat center/cover;
            color: #fff;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            background: rgba(60, 0, 0, 0.92);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 40px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            text-decoration: none;
            font-size: 22px;
            color: #fff;
            font-family: 'Playfair Display', serif;
        }

        .nav-links a:hover {
            text-decoration: underline;
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

    <div class="navbar">
        <div class="nav-logo"></div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Product</a>
            <a href="#">About Us</a>
        </div>
    </div>

    <div class="container">
        <div class="book-img">
            <img src="jonah-hex.jpg" alt="Book Cover">
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
