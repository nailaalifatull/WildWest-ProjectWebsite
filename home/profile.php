<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - Wild West Reads</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../assets/back_profile.png');
            background-size: cover;
            background-position: center;
            font-family: "Abhaya Libre", serif;
        }

        /* ---------------------------------
           NAVBAR SAMA DENGAN HOME / PRODUCT
           --------------------------------- */
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
            transition: 0.3s;
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

        /* -------------------
           TITLE EDIT PROFILE
           ------------------- */
        .title {
            font-family: "Abhaya Libre", cursive;
            font-size: 50px;
            text-align: center;
            margin-top: 30px;
            color: #f7f1e9;
            text-shadow: 4px 4px 5px #000;
        }

        /* FOTO PROFILE BULAT */
        .profile-pic-container {
            margin: 20px auto;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: #d9d9d9;
            position: relative;
        }

        .camera-btn {
            position: absolute;
            right: 5px;
            bottom: 5px;
            background: #f6dbb1;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        /* FORM LABEL */
        label {
            font-family: "Rye", cursive;
            color: #fcead3;
            font-size: 30px;
        }

        /* INPUT STYLE */
        .input-box {
            width: 60%;
            padding: 10px 18px;
            background: #520e0e;
            border: 3px dashed #f5e3c8;
            color: #ffffff;
            font-size: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            display: block;

            margin-left: auto;   /* ← Bikin center */
            margin-right: auto;  /* ← Bikin center */
        }

        /* WRAPPER FORM */
        .form-container {
            width: 60%;
            margin: auto;
            text-align: center;  
        }

        .form-row {
            width: 60%;            /* semua label + input mulai dari titik yang sama */
            margin: 0 auto 25px;   /* center */
            text-align: left;      /* tapi isi tetap rata kiri */
        }

        .form-row label {
            display: block;
            font-family: "Rye", cursive;
            color: #fcead3;
            font-size: 28px;
            margin-bottom: 5px;
        }

        .form-row .input-box {
            width: 100%;     /* mengikuti lebar form-row */
            margin: 0;       /* hilangkan margin auto sebelumnya */
        }

        label {
            margin-left: 5px;
        }


        /* BACK BUTTON */
        .back-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #4a2818;
            color: #fff;
            padding: 10px 25px;
            border-radius: 12px;
            font-size: 22px;
            font-family: "Rye", cursive;
            text-decoration: none;
            border: 2px solid #F5E3C8;
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="header">
        <div class="logo">
            <img src="../assets/logo.png">
            <img src="../assets/logo.png">
            <img src="../assets/logo.png">
        </div>

        <nav class="nav-links">
            <a href="home.php">Home</a>
            <a href="product.php">Product</a>
            <a href="about_us.php">About Us</a>
            <a href="profile.php" class="user-icon"></a>
        </nav>
    </header>

    <!-- TITLE -->
    <div class="title">Edit Profile</div>

    <!-- FOTO PROFIL -->
    <div class="profile-pic-container">
        <div class="camera-btn">📷</div>
    </div>

    <!-- FORM -->
    <div class="form-container">

        <div class="form-row">
            <label>Username</label>
            <input type="text" class="input-box" value="Jonah Bino Hin">
        </div>

        <div class="form-row">
            <label>Email</label>
            <input type="email" class="input-box" value="Momuuung@gmail.com">
        </div>

        <div class="form-row">
            <label>Password</label>
            <input type="password" class="input-box" value="•••••••••••••••">
        </div>
    </div>

    <!-- BACK BUTTON -->
    <a href="../index.php" class="back-btn">‹ Back</a>

</body>
</html>
