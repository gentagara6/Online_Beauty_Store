<?php include '../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Beauty</title>
	  <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- <section id="header">
      <a href="index.php" class="logo">Glow <span>Beauty</span></a>        
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>
            </ul>
        </div>
    </section> -->

    <section id="page-header">
        <h4>Your Skincare Routine Starts Here!</h4>
        <p>Explore our full collection</p>
    </section>

    <section class="shopping container">
        <h2>Shop Our Products</h2>

        <div class="products">

          <div class="product" onclick="window.location.href='sproduct.php?id=1';">
            <img src="../assets/img/glazing_milk.webp" alt="Product 1">
            <h3>Glazing Milk</h3>
            <p>$32.00</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>

          <div class="product" onclick="window.location.href='sproduct.php?id=2';">
            <img src="../assets/img/barrier_restore_cream.webp" alt="Product 2">
            <h3>Barrier Restore Cream</h3>
            <p>$32.00</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>

          <div class="product" onclick="window.location.href='sproduct.php?id=3';">
            <img src="../assets/img/peptide_glazing_fluid.webp" alt="Product 3">
            <h3>Peptide Glazing Fluid</h3>
            <p>$32.00</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>

          <div class="product" onclick="window.location.href='sproduct.php?id=4';">
            <img src="../assets/img/pineapple_refresh.webp" alt="Product 4">
            <h3>Pineapple Cleanser</h3>
            <p>$30.00</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>

          <div class="product" onclick="window.location.href='sproduct.php?id=5';">
            <img src="../assets/img/espresso_lip_tint.webp" alt="Product 5">
            <h3>Espresso Lip Tint</h3>
            <p>$20.00</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>

          <div class="product" onclick="window.location.href='sproduct.php?id=6';">
            <img src="../assets/img/raspberry_jelly_lip_tint.webp" alt="Product 6">
            <h3>Raspberry Jelly Lip Tint</h3>
            <p>$20.00</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>

          <div class="product" onclick="window.location.href='sproduct.php?id=7';">
            <img src="../assets/img/ribbon_lip_tint.webp" alt="Product 7">
            <h3>Ribbon Lip Tint</h3>
            <p>$20.00</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>

          <div class="product" onclick="window.location.href='sproduct.php?id=8';">
            <img src="../assets/img/toast_lip_tint.webp" alt="Product 8">
            <h3>Toast Lip Tint</h3>
            <p>$20.00</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>

        </div>
    </section>

    <section class="shopping" id="new">
      <h2>New arrivals</h2>

      <div class="products">

        <div class="product">
          <img src="../assets/img/sprinkle_blush.webp" alt="Product 1">
          <h3>Sprinkle Blush</h3>
          <p>$25.00</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
          <img src="../assets/img/sun_soak_blush.webp" alt="Product 2">
          <h3>Sun Soak Blush</h3>
          <p>$25.00</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
          <img src="../assets/img/peptide_lip_shape.webp" alt="Product 3">
          <h3>Peptide Lip Shape</h3>
          <p>$24.00</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
          <img src="../assets/img/lip_shape_set.webp" alt="Product 3">
          <h3>Peptide Lip Shape Set</h3>
          <p>$60.00</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
          <img src="../assets/img/scented_espresso_tint.webp" alt="Product 3">
          <h3>Scented Espresso Lip Tint</h3>
          <p>$20.00</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
          <img src="../assets/img/scented_rj_tint.webp" alt="Product 3">
          <h3>Scented Raspberry Jelly Lip Tint</h3>
          <p>$20.00</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
          <img src="../assets/img/scented_ribbon_tint.webp" alt="Product 3">
          <h3>Scented Ribbon Lip Tint</h3>
          <p>$20.00</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
          <img src="../assets/img/scented_toast_tint.webp" alt="Product 3">
          <h3>Scented Toast Lip Tint</h3>
          <p>$20.00</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

      </div>
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

    <div id="alert">Added to cart!</div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/sproducts.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>

<?php include '../includes/footer.php'; ?>