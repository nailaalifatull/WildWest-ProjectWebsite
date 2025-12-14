<?php
include "../backend/config.php";

if (!isset($_GET['slug'])) {
    header("Location: product.php");
    exit;
}

$slug = mysqli_real_escape_string($conn, $_GET['slug']);

$query = mysqli_query($conn, "SELECT * FROM products WHERE slug='$slug'");
$buku = mysqli_fetch_assoc($query);

if (!$buku) {
    echo "Buku tidak ditemukan";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title><?= $buku['title']; ?> - Wild West Reads</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <style>
        /* --- Body & Background --- */
body {
    background-image: url('../assets/back_books.png');
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
    color: #F5E3C8;
    font-family: Arial, sans-serif;
    min-height: 100vh;
}

/* --- Container Utama --- */
.container {
    margin-top: 120px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 40px;
    padding: 40px;
}

/* --- Gambar Buku --- */
.book-img {
    position: relative;
    background-image: url('../assets/motif_back.png');
    background-size: 100%;
    background-repeat: no-repeat;
    padding: 50px;
}

.book-img img {
    width: 250px;
    border-radius: 6px;
    box-shadow: 0 0 18px rgba(0, 0, 0, 0.8);
    border: 4px solid #5d0f17cc;
}

/* --- Box Informasi --- */
.info-box {
    padding: 100px;
    max-width: 550px;
    background-image: url('../assets/motif_back2.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    text-align: center;
    font-family: "Abhaya Libre", serif;
    position: relative;
    margin-top: -80px;
}

/* --- Judul Buku --- */
.info-box h2 {
    font-size: 48px;
    margin-bottom: 5px;
    color: #F2E5C5;
    line-height: 1.2;
}

/* --- Author --- */
.author {
    font-size: 42px;
    margin-bottom: 15px;
    color: #FFD776;
}

/* --- Rating --- */
.stars {
    margin: 15px 0;
    font-size: 38px;
    color: #E87400;
}

/* --- Deskripsi --- */
.desc {
    color: #C5A086;
    margin-top: 15px;
    font-size: 19px;
    line-height: 1.6;
    text-shadow: 1px 1px 2px #000;
}

/* --- Genre --- */
.genre {
    margin-top: 18px;
    font-size: 19px;
    padding-top: 10px;
    border-top: 1px dashed #BCAF7B;
}

/* --- Navigasi Bawah --- */
.footer-left {
    position: fixed;
    bottom: 40px;
    left: 40px;
    z-index: 20;
}

.footer-right {
    position: fixed;
    bottom: 40px;
    right: 40px;
    z-index: 20;
}

.footer-left a,
.footer-right a {
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

.footer-left a:hover,
.footer-right a:hover {
    background-color: #6a3a24;
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

<div class="container">

    <div class="book-img">
        <img src="../assets/<?= $buku['image']; ?>" alt="Book Cover">
    </div>

    <div class="info-box">

        <h2><?= $buku['title']; ?></h2>

        <div class="author">
            By <u><?= $buku['author']; ?></u>
        </div>

        <div class="stars">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo $i <= $buku['rating'] ? "★" : "☆";
            }
            ?>
            <?= $buku['rating_value']; ?>
        </div>

        <div class="desc">
            <?= nl2br($buku['description']); ?>
        </div>

        <div class="genre">
            <b>Genre:</b> <?= $buku['genre']; ?>
        </div>

        <div class="footer-left">
            <a href="product.php">← Back</a>
        </div>

        <div class="footer-right">
            <a href="rating.php">Rating →</a>
        </div>

    </div>
</div>

</body>
</html>
