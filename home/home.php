<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>WildWest Reads</title>
<style>
  body {
    margin: 0;
    font-family: "poppins", serif;
    background: #4a0000;
    color: #e5e5e5;
    overflow-x: hidden;
  }

  /* Navbar */
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px;
    background: #3b0000;
    border-bottom: 2px solid #210000;
  }

  nav .logo img {
    height: 50px;
  }

  nav ul {
    list-style: none;
    display: flex;
    gap: 40px;
  }

  nav ul li {
    font-size: 22px;
  }

  nav ul li a {
    color: #e8d6b9;
    text-decoration: none;
    border-bottom: 2px solid transparent;
  }

  nav ul li a:hover {
    border-bottom: 2px solid #e8d6b9;
  }

  /* Hero Section */
  .hero {
    position: relative;
    width: 100%;
    height: 100vh;
    background: url('home-bg.png') -150px center/cover no-repeat; 
    display: flex;
    align-items: center;
    padding-left: 40%;
  }

  .hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, rgba(0, 0, 0, 0.7), transparent);
  }

  .hero-text {
    position: relative;
    max-width: 500px;
  }

  .hero-text h1 {
    font-size: 48px;
    color: #d7c4a3;
    margin-bottom: 0;
  }

  .hero-text h2 {
    font-size: 40px;
    color: #d7c4a3;
  }

  .next-btn {
    margin-top: 30px;
    display: inline-block;
    background: #b38a65;
    color: #fff;
    padding: 12px 28px;
    font-size: 24px;
    border-radius: 8px;
    text-decoration: none;
  }

  .next-btn:hover {
    background: #9e7552;
  }
</style>
</head>
<body>

<nav>
  <div class="logo">
    <img src="logo.png" alt="Logo" />
  </div>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Product</a></li>
  </ul>
</nav>

<section class="hero">
  <div class="hero-text">
    <h1>Say Hello to</h1>
    <h2>WildWest Reads</h2>
    <a href="#" class="next-btn">Next ➤</a>
  </div>
</section>

</body>
</html>
