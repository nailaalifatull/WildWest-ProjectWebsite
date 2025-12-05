<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wild West Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        :root {
            --color-dark-maroon: #361013;
            --color-light-text: #F0E5D8;
            --color-accent-gold: #D4A975;
            --color-button-brown: #8A3D28;
            --color-social-bg: #4B1B1E;
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: var(--color-dark-maroon);
            font-family: 'Roboto', sans-serif;
            overflow: hidden;
        }

        .main-container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            height: 90vh;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        /* PANEL FORM */
        .form-panel {
            background-color: var(--color-dark-maroon);
            width: 50%;
            padding: 30px 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: var(--color-light-text);
            position: relative;
            box-shadow: 5px 0 15px rgba(0,0,0,0.4);
        }

        /* LOGO KIRI ATAS */
        .wild-west-logo {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .wild-west-logo img {
            width: 90px;
        }

        /* JUDUL LOG IN (O diganti logo) */
        .title-header {
            font-family: 'Metal Mania', cursive;
            font-size: 80px;
            letter-spacing: 2px;
            text-align: center;
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .title-header img {
            width: 70px;
            height: 70px;
            margin: 0 5px;
            transform: translateY(5px);
        }

        .form-content {
            width: 100%;
            max-width: 350px;
            margin: 0 auto;
        }

        .input-group {
            width: 100%;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 2px solid var(--color-accent-gold);
            padding: 10px 0;
            color: var(--color-light-text);
            font-size: 18px;
            outline: none;
            font-family: 'Metal Mania', cursive;
        }

        .input-group input::placeholder {
            color: var(--color-light-text);
            opacity: 0.7;
        }

        .separator {
            font-family: 'Metal Mania', cursive;
            color: var(--color-light-text);
            text-align: center;
            margin: 20px 0;
        }

        .social-icons {
           display: flex;
           justify-content: center;
           gap: 20px;
           margin-bottom: 30px;
        }

/* === REVISI UKURAN ICON GOOGLE & FACEBOOK === */
        .social-icons img {
           width: 40px;
           height: 40px;
           object-fit: contain;
           border-radius: 50%;
           border: 1px solid var(--color-accent-gold);
           background-color: var(--color-social-bg);
           padding: 5px;
           transition: 0.3s;
           cursor: pointer;
        }

        .social-icons img:hover {
           transform: scale(1.1);
           background-color: var(--color-button-brown);
        }


        .login-btn {
            width: 70%;
            background-color: var(--color-button-brown);
            color: var(--color-light-text);
            padding: 12px 40px;
            border-radius: 5px;
            border: none;
            font-family: 'Metal Mania', cursive;
            font-size: 20px;
            cursor: pointer;
            display: block;
            margin: 10px auto 0;
            transition: 0.3s;
        }

        .login-btn:hover {
            background-color: #A0523C;
        }

        .login-prompt {
            text-align: center;
            margin-top: 25px;
            font-family: 'Metal Mania', cursive;
        }

        .register-link {
            color: var(--color-accent-gold);
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        /* BACK BUTTON */
        .back-btn {
            position: absolute;
            bottom: 40px;
            left: 70px;
            color: var(--color-light-text);
            border: 1px solid var(--color-light-text);
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
            font-family: 'Metal Mania', cursive;
        }

        .back-btn:hover {
            background-color: rgba(255,255,255,0.2);
        }

        /* PANEL GAMBAR */
        .image-panel {
            width: 50%;
            background: url('../assets/backrumah.png') center/cover no-repeat;
            position: relative;
        }

        .cowboy-image {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            height: 100%;
            max-width: 100%;
            object-fit: cover;
            filter: drop-shadow(0 0 20px rgba(0,0,0,0.9));
        }

        @media (max-width: 1024px) {
            .image-panel { display: none; }
            .form-panel { width: 100%; box-shadow: none; }
            .wild-west-logo { left: 30px; }
            .login-btn { width: 80%; }
        }
    </style>
</head>
<body>

    <div class="main-container">

        <div class="form-panel">

            <div class="wild-west-logo">
                <img src="../assets/logo3.png" alt="Logo">
            </div>

            <h1 class="title-header">
                L
                <img src="../assets/logo2.png" alt="O Logo">
                GIN
            </h1>

            <div class="form-content">
                <form>
                    <div class="input-group">
                        <input type="text" placeholder="Username" required>
                    </div>

                    <div class="input-group">
                        <input type="password" placeholder="Password" required>
                    </div>

                    <button class="login-btn">Log in</button>
                </form>

                <p class="login-prompt">
                    Don't have account?
                    <a href="register.html" class="register-link">Register</a>
                </p>

                <p class="separator">- OR -</p>

                <div class="social-icons">
                    <img src="../assets/icon_google.jpeg" alt="google">
                    <img src="../assets/icon_facebook.png" alt="facebook">
                </div>
            </div>

            <a href="create_account.php" class="back-btn"><i class="fas fa-chevron-left"></i> Back</a>
        </div>

        <div class="image-panel">
            <img src="../assets/cowboy2.png" class="cowboy-image">
        </div>

    </div>

</body>
</html>
