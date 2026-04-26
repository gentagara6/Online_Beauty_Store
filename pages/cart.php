<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//store that user visited cart page
$_SESSION['last_visited_page'] = "cart.php";

//count cart page visits
if (!isset($_SESSION['cart_page_visits'])) {
    $_SESSION['cart_page_visits'] = 1;
} else {
    $_SESSION['cart_page_visits']++;
}

//remember last cart visit for 30 days
setcookie("last_cart_visit", date("Y-m-d H:i:s"), time() + (86400 * 30), "/");


include '../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart | Glow Beauty</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

 <!-- <section id="header">
      <a href="index.php" class="logo">Glow <span>Beauty</span></a>        
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="active" href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>
            </ul>
        </div>
    </section> -->

    <section  id="page-header" class="cart-header">
        <h2>#cart</h2>
        <p>Free shipping on orders over $50</p>
    </section>

<section id="cart" class="container">
<table width="100%">
    <thead>
        <tr>
            <td>Remove</td>
            <td>Product</td>
            <td>Price</td>
            <td>Qty</td>
            <td>Subtotal</td>
        </tr>
    </thead>
    <tbody id="cart-body"></tbody>
</table>

<div id="cart-total-box">
    <h3> Total: <span id="cart-total" style="font-weight: bolder; font-size: smaller;">$0.00</span></h3>
    
</div>
<button id="orderNow">Order Now</button>
</section>

<section id="newsletter" class="container">
    <div class="newstext">
      <h4>Sign up for newsletter</h4>
      <p>Get notification about everything new and <span>special offers!</span></p>
    </div>

    <div class="form">
      <input type="text" placeholder="Your email Address">
      <button class="normal">Sign up</button>
    </div>
    </section>

</body>
</html>

<?php include '../includes/footer.php'; ?>