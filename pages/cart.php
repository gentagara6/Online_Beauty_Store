<?php include '../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart | Glow Beauty</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

 <section id="header">
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
    </section>

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

    <section class="footer container">
	
    <div class="contact-box">
        <h4>Primary</h4>
        <li><a href="#">My account</a></li>
        <li><a href="shop.php">Shopping</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="cart.php">Shopping Cart</a></li>
        <li><a href="blog.php">Blog Page</a></li>
    </div>
 
    <div class="contact-box">
        <h4>Quick Links</h4>
        <li><a href="contact.php#contact-details">Store Location</a></li>
        <li><a href="contact.php#form-details">Leave a Message</a></li>
        <li><a href="shop.php#new">New Arrivals</a></li>
        <li><a href="about.php#who">Who we are</a></li>
        <li><a href="blog.php#blog">Latest Blog Post</a></li>
    </div>
 
    <div class="contact-box">
        <h4>Information</h4>
        <li><a href="#">Privacy Page</a></li>
        <li><a href="#">About use</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Delivery information</a></li>
        <li><a href="#">FAQs</a></li>
    </div>

    <p id="year"></p>
    </section>
   
    <script src="../assets/js/cart.js"></script>
    <script src="../assets/js/sproducts.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>
</html>

<?php include '../includes/footer.php'; ?>