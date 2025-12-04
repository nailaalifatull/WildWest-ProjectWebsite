<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wild West Landing Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Georgia', serif;
            background: url('../assets/background.png') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 80px;
            color: #fff;
        }

        .content {
            max-width: 600px;
        }

        .title {
            font-size: 110px;
            font-weight: 900;
            line-height: 0.9;
        }

        .title span {
            display: block;
        }

        .title .west {
            font-size: 120px;
            font-weight: 900;
            color: #fdf0e0;
            text-shadow: 3px 3px #7b0000;
            letter-spacing: 8px;
        }

        p.tagline {
            font-size: 28px;
            margin-top: 20px;
            color: #f5d6c6;
        }

        .buttons {
            margin-top: 40px;
            display: flex;
            gap: 20px;
        }

        button {
            background: #f5d6a3;
            border: none;
            padding: 12px 28px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s ease;
        }

        button:hover {
            background: #f4c985;
            transform: translateY(-3px);
        }

        .skull {
            height: 75vh;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="title">
            <span>WILD</span>
            <span class="west">WEST</span>
        </div>
        <p class="tagline">Discover a world of endless imagination</p>
        <div class="buttons">
            <button>Sign Up</button>
            <button>Log In</button>
        </div>
    </div>

    <img src="../assets/skull.png" class="skull" />
</body>
</html>
