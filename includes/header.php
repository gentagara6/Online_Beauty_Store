<?php
session_start();
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
            <li>Welcome, <?php echo $_SESSION['user']['email']; ?></li>
            <li><a href="logout.php">Logout</a></li>

            <?php if($_SESSION['user']['role'] == 'admin'): ?>
                <li><a href="#">Admin</a></li>
            <?php endif; ?>

        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</section>