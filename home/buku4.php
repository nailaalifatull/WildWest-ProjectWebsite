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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <style>

        /* --- Body & Latar Belakang Utama (FOTO KOBOI BESAR) --- */
        body {
            background-image: url('../assets/back_books.png');
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

        /* --- Konten Utama --- */
        .container {
            margin-top: 100px; 
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            padding: 40px;
            flex-grow: 1;
        }

        .book-img {
            position: relative;
            background-image: url('../assets/motif_back.png'); 
            background-size: 100% ;
            width: 250px;
            padding: 50px;
            margin-left: -50px; 
        }

        .book-img img {
            width: 250px;
            border-radius: 6px;
            box-shadow: 0 0 18px rgba(0, 0, 0, 0.8);
            position: relative;
            z-index: 10;
            border: 4px solid #5d0f17cc; 
        }

        .info-box {
            position: relative;
            padding: 120px;
            max-width: 550px; 
            font-family: "Abhaya Libre", serif;
            background-image: url('../assets/motif_back2.png'); 
            background-size: cover;  
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
        }

        .info-box h2 {
            font-size: 48px;
            margin: 0 0 5px 0;
            font-family: "Abhaya Libre", serif;
            line-height: 1.2;
            color: #F2E5C5;
        }

        .author {
            font-family: "Abhaya Libre", serif;
            font-size: 48px;
            margin-bottom: 15px;
            color: #FFD776;
        }

        .stars {
            margin: 12px 0;;
            font-size: 40px;
            color: #E87400;
        }

        .desc {
            color: #C5A086;
            margin-top: 12px;
            font-size: 19px;
            line-height: 1.6;
            text-shadow: 1px 1px 2px #000;
        }

        .genre {
            margin-top: 18px;
            font-size: 19px;
            padding-top: 10px;
            border-top: 1px dashed #BCAF7B;
        }

        .footer-nav {
            position: fixed; 
            bottom: 40px;
            right: 40px;     
            width: auto;    
            display: block;  
            padding: 0;
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

    <div class="container">
        <div class="book-img">
            <img src="../assets/buku4.png" alt="Book Cover">
        </div>

        <div class="info-box">
            <h2>Pulp</h2>
            <div class="author">By <u>Ed Brubaker</u></div>

            <div class="stars">★★★★☆ 4,31</div>

            <div class="desc">
                Now avaible as a soft cover trade paperback: 
                A gorgeous original graphic novel from the bestselling creators of KILL OR BE KILLED, 
                MY HEROES HAVE ALWAYS BEEN JUNKIES, and CRIMINAL.
            </div>

            <div class="genre">
                <b>Genre:</b>Comics, Graphic Novels, Westerns, Crime.
            </div>

            <div class="footer-nav">
                <a href="product.php">Rating → </a>
        </div>
        </div>
    </div>

</body>
</html>