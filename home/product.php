<?php
include "../backend/config.php";

$query = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books - Wild West Reads</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('../assets/back_product.jpg');
            background-size: cover;
            background-position: center;
        }
        
        /* TITLE */
        .title {
            font-family: "Jacquard 12", cursive;
            font-size: 95px;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 20px;
            color: #f7f1e9;
            text-shadow: 4px 4px 5px #000;
        }

        /* BACK BUTTON */
        .back-btn {
            position: fixed;      /* bikin nempel ke layar */
            bottom: 20px;         /* jarak dari bawah */
            left: 20px;           /* jarak dari kiri */
            background-color: #4a2818;
            color: #fff;
            padding: 10px 25px;
            border-radius: 12px;
            font-size: 22px;
            font-family: "Rye", cursive;
            text-decoration: none;
            border: 2px solid  #F5E3C8;
            z-index: 1000;        /* supaya ga ketutup elemen lain */  
        }

        .back-btn:hover {
            background-color: #4a2818 ;
        }

        /* GRID */
        .container {
            max-width: 1200px;
            margin: auto;
            padding-bottom: 60px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            padding: 20px;
        }

        .card {
            background: #f9efe0;
            border: 5px solid #7a0e25;
            border-radius: 15px;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.25);
            padding: 20px;
            text-align: center;
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
            margin: 10px 0;
        }

        .arrow {
            text-align: right;
            font-size: 25px;
            font-weight: bold;
            cursor: pointer;
        }

    </style>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="../assets/logo.png" alt="Wild West Logo">
        </div>

        <?php include "../layout/navbar.php"; ?>
    </header>

    <div class="title">Books</div>

    <a href="home.php" class="back-btn">‹ Back</a>

    <div class="container">
        <div class="grid">
            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                <div class="card">
                    <img src="../assets/<?= $row['image']; ?>">

                    <div class="rating">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            echo $i <= $row['rating'] ? "★" : "☆";
                        }
                        ?>
                    </div>

                    <div class="title-book">
                        <?= $row['title']; ?>
                    </div>

                    <a href="../home/product_detail.php?slug=<?= $row['slug']; ?>" class="card-link">
                        <div class="arrow">→</div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

    </div>

</body>
</html>

