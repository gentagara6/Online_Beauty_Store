<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user']) && isset($_COOKIE['loggedUser'])) {
    $_SESSION['user'] = json_decode($_COOKIE['loggedUser'], true);
}

$lastLogin = $_SESSION['last_login'] ?? ($_COOKIE['lastLogin'] ?? null);
$loginCount = $_COOKIE['loginCount'] ?? null;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glow Beauty</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<section id="header">
    <a href="index.php" class="logo">Glow <span>Beauty</span></a>

    <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>

        <?php if(isset($_SESSION['user'])): ?>
            <?php if($_SESSION['user']['role'] == 'admin'): ?>
                <li><a href="admin.php">Admin Panel</a></li>
            <?php endif; ?>

            <?php if ($lastLogin): ?>
                <li style="font-size:12px; color:gray;">
                    Last login: <?php echo htmlspecialchars($lastLogin); ?>
                </li>
            <?php endif; ?>

            <?php if ($loginCount): ?>
                <li style="font-size:12px; color:gray;">
                    Logins: <?php echo htmlspecialchars($loginCount); ?>
                </li>
            <?php endif; ?>

            <li><a href="logout.php">Logout</a></li>

        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</section>