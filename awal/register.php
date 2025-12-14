<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wild West Create Account</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        :root {
            --color-dark-maroon: #361013ff;
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .form-panel {
            background-color: var(--color-dark-maroon);
            width: 50%;
            padding: 30px 70px;
            color: var(--color-light-text);
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.4);
        }

        /* LOGO */
        .wild-west-logo {
            align-self: flex-start;
        }
        .wild-west-logo img {
            width: 80px;
            margin-bottom: 5px;
        }

        /* JUDUL */
        .title-header {
            font-family: 'Metal Mania', cursive;
            font-size: 50px;
            text-align: center;
            margin-bottom: 20px;
            align-self: center;
            letter-spacing: 2px;
        }

        /* INPUT */
        .input-group {
            width: 100%;
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 2px solid var(--color-accent-gold);
            padding: 10px 0;
            color: var(--color-light-text);
            font-size: 20px;
            outline: none;
            font-family: 'Metal Mania', cursive;
            letter-spacing: 1px;
        }

        .input-group input::placeholder {
            color: var(--color-light-text);
            opacity: 0.7;
            font-family: 'Metal Mania', cursive;
        }

        /* SOCIAL LOGIN */
        .social-login {
            display: flex;
            gap: 15px;
            width: 100%;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .social-btn {
            flex: 1;
            padding: 8px 10px;
            border: 1px solid var(--color-accent-gold);
            border-radius: 5px;
            background-color: var(--color-social-bg);
            color: var(--color-light-text);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 14px;
        }

        .separator {
            color: var(--color-light-text);
            margin: 15px 0;
            font-size: 16px;
            font-weight: bold;
        }

        /* BUTTON CREATE ACCOUNT */
        .create-account-btn {
            background-color: var(--color-button-brown);
            color: var(--color-light-text);
            padding: 12px 40px;
            border: none;
            border-radius: 5px;
            font-size: 22px;
            cursor: pointer;
            width: 60%;
            margin: 0 auto; /* FIX POSITION */
            display: block; /* FIX CENTERING */
            text-align: center;
            font-family: 'Metal Mania', cursive;
        }

        .login-prompt {
            margin-top: 30px;
            text-align: center;
            font-family: 'Metal Mania', cursive;
        }

        .login-link {
            color: var(--color-accent-gold);
            text-decoration: none;
        }

        /* BACK BUTTON — FIX SO IT DOES NOT PULL BUTTON LEFT */
        .back-btn {
            background: rgba(255,255,255,0.1);
            color: var(--color-light-text);
            border: 1px solid var(--color-light-text);
            padding: 8px 20px;
            border-radius: 5px;
            font-size: 18px;
            font-family: 'Metal Mania', cursive;
            position: absolute;
            bottom: 40px;
            left: 30px; /* Dikecilkan agar tidak mengganggu layout */
            text-decoration: none;
            z-index: 1; /* Supaya tidak nabrak elemen lain */
        }

        .back-btn:hover {
            background-color: rgba(255,255,255,0.2);
        }

        /* IMAGE PANEL */
        .image-panel {
            width: 50%;
            background: url('../assets/backrumah.png') no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .cowboy-image {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            height: 100%;
            filter: drop-shadow(0 0 20px rgba(0, 0, 0, 0.9));
        }

        @media (max-width:1024px) {
            .image-panel { display:none; }
            .form-panel { width:100%; }
        }
    </style>
</head>

<body>
<div class="main-container">
    <div class="form-panel">

        <div class="wild-west-logo">
            <img src="../assets/logo3.png" alt="Wild West Logo">
        </div>

        <h1 class="title-header">CREATE<br>ACCOUNT</h1>
        <form style="width: 100%;" action="../backend/register_proses.php" method="POST">
            <div class="input-group">
                <input type="text" name="full_name" placeholder="Full Name" required />
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required />
            </div>

            <button type="submit" class="create-account-btn">
                Create Account
            </button>
        </form>

        <p class="login-prompt">
            Already have an account? <a href="../awal/login.php" class="login-link">Log in</a>
        </p>

        <a href="../awal/awal.php" class="back-btn">
            <i class="fas fa-chevron-left"></i> Back
        </a>

    </div>

    <div class="image-panel">
        <img src="../assets/cowboy2.png" class="cowboy-image" alt="Cowboy">
    </div>
</div>
</body>
</html>
