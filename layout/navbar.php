<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<style>
/* ===== NAVBAR STYLE ===== */
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
</style>

<header class="header">

    <nav class="nav-links">
        <a href="home.php"
           class="<?= basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : '' ?>">
           Home
        </a>

        <a href="product.php"
           class="<?= basename($_SERVER['PHP_SELF']) == 'product.php' ? 'active' : '' ?>">
           Product
        </a>

        <a href="about_us.php"
           class="<?= basename($_SERVER['PHP_SELF']) == 'about_us.php' ? 'active' : '' ?>">
           About Us
        </a>

        <a href="profile.php" class="user-icon"></a>
    </nav>
</header>
