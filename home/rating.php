<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rating</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">

   <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

/* ================= BODY ================= */
        body {
            background-image: url('../assets/back_rating.png'); 
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

/* ================= WRAPPER ================= */
        .rating-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
        }

/* ================= CONTAINER (LAYER) ================= */
        .rating-container {
            position: relative;
            width: 1000px;   /* landscape */
            height: 520px;
        }

/* ================= IMAGE LAYER ================= */
        .image-section {
            position: relative;
            width: 580px;     /* PORTRAIT */
            height: 660px;
            border-radius: 30px;
            background-image: url('../assets/cowboy5.png');
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

/* overlay biar teks kebaca */
        .image-section::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(93, 15, 23, 0.45);
            border-radius: 30px;
        }

/* ================= CARD REVIEW ================= */
        .review-card {
            position: absolute;
            left: 440px;
            top: 50%;
            transform: translateY(-50%);
            width: 700px;
            height: 430px;
            background: #5d0f17;
            border-radius: 20px;
            padding: 24px;
            z-index: 2;
            box-shadow: 0 12px 25px rgba(0,0,0,0.35);
            color: #fff;
            }

/* ================= HEADER ================= */
        .review-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            font-family: 'Rye', serif;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #ccc;
        }

        .post-text {
            font-size: 14px;
            opacity: 0.85;
        }

/* ================= STARS ================= */
        .stars {
            margin-bottom: 15px;
            font-family: 'Rye', cursive;
        }

        .stars span {
            font-size: 28px;
            color: #fbbc04;
            cursor: pointer;
        }

/* ================= TEXTAREA ================= */
        textarea {
            width: 100%;
            height: 90px;
            border-radius: 10px;
            border: none;
            padding: 12px;
            resize: none;
            margin-bottom: 15px;
            font-family: 'Abhaya Libre', serif;
            font-size: 14px;
        }

/* ================= UPLOAD ================= */
        .upload-btn {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: none;
            background: #e8f0fe;
            color: #000000ff;
            cursor: pointer;
            margin-bottom: 30px;
            font-family: 'Abhaya Libre', cursive;
            font-size: 16px;
        }

/* ================= ACTION ================= */
        .action-btn {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
        }

        .cancel {
            background: transparent;
            border: none;
            color: #fbbc04;
            cursor: pointer;
            font-family: 'Rye', cursive;
        }

        .post {
            background: #fbbc04;
            color: #5d0f17;
            border: none;
            padding: 8px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-family: 'Rye', cursive;
        }

        /* --- Navigasi Bawah --- */
        .footer-nav {
            position: fixed;
            bottom: 40px;
            right: 40px;
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

/* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
        .rating-container {
            width: 90%;
            height: 600px;
        }

        .review-card {
            position: absolute;
            left: 50%;
            top: auto;
            bottom: 30px;
            transform: translateX(-50%);
            width: 90%;
        }
    }
</style>

</head>
<body>

<div class="rating-wrapper">
    <div class="rating-container">
        <div class="image-section">
        </div>
        <div class="review-card">
            <div class="review-header">
                <span class="avatar"></span>
                <span class="post-text">Share your Wild West review ★</span>
            </div>
            <div class="stars">
                <span>★</span>
                <span>★</span>
                <span>★</span>
                <span>★</span>
                <span>★</span>
            </div>
            <textarea placeholder="Share your thoughts about this book"></textarea>
            <button class="upload-btn">
                📷 Add supporting images
            </button>
            <div class="action-btn">
                <button class="cancel">Cancel</button>
                <button class="post">Post</button>
            </div>
        </div>
        <div class="footer-nav">
            <a href="product.php">← Back</a>
        </div>

    </div>
</div>

</body>
</html>
