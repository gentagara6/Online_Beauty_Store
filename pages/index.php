<?php include '../includes/header.php'; ?> 

<?php
require_once '../classes/product.php';
require_once '../classes/makeupproduct.php';
?>


<?php if (isset($_GET['res']) && isset($_SESSION['user'])): ?>
    <?php if ($_GET['res'] == "welcome"): ?>
        <p id="welcome-message" style="color:green; text-align:center; font-size:16px; margin:20px;">
            Welcome <?php echo htmlspecialchars($_SESSION['user']['email']); ?>
        </p>
    <?php endif; ?>

    <script>
        setTimeout(function () {
            const msg = document.getElementById("welcome-message");
            if (msg) msg.style.display = "none";

            window.history.replaceState({}, document.title, window.location.pathname);
        }, 3000);
    </script>
<?php endif; ?>

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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>
            </ul>
        </div>
    </section> -->

    <section  id="hero">
        <h4>Achieve<br>Glass Skin</h4>
        <p>The Best Products</p>
        <a href="login.php"><button>Login</button></a>
    </section>

    <!-- <div id="auth-modal" class="auth-modal">
  <div class="auth-box">
    <span id="close-auth" class="close-btn">&times;</span>

    <h2 id="auth-title">Create account</h2>

    
    <form id="signup-form" class="active">
      <input type="email" id="signup-email" placeholder="Email" required>
      <input type="password" id="signup-password" placeholder="Password" required>
      <button type="submit">Sign up</button>
      <p id="signup-msg"></p>

      <p class="auth-switch">
        Already have an account?
        <span id="switch-to-login">Login</span>
      </p>
    </form>

    <form method="POST" action="login.php">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      <p id="login-msg"></p>

      <p class="auth-switch">
        Don’t have an account?
        <span id="switch-to-signup">Sign up</span>
      </p>
    </form>

  </div>
</div> -->

    <section class="shopping container">
        <h2>Shop Our Products</h2>
        <div class="products">
          <?php
           $products = [
            new Product("Glazing Milk", 32, "Skincare", "glazing_milk.webp"),
            new Product("Barrier Restore Cream", 32, "Skincare", "barrier_restore_cream.webp"),
            new Product("Peptide Glazing Fluid", 32, "Skincare", "peptide_glazing_fluid.webp"),
            new Product("Pineapple Cleanser", 30, "Skincare", "pineapple_refresh.webp"),

           new MakeupProduct("Espresso Lip Tint", 20, "Makeup", "Brown", "espresso_lip_tint.webp"),
           new MakeupProduct("Raspberry Jelly Lip Tint", 20, "Makeup", "Burgundy", "rasberry_lip_tint.webp"),
           new MakeupProduct("Ribbon Lip Tint", 20, "Makeup", "Light Pink", "ribbon_lip_tint.webp"),
           new MakeupProduct("Toast Lip Tint", 20, "Makeup", "Nude", "toast_liptint.webp")
                  ];
           ?>
        <?php foreach ($products as $product): ?>

        <div class="product">

        <img src="../assets/img/<?php echo $product->getImage(); ?>">

       <h3><?php echo $product->getName(); ?></h3>

        <p>$<?php echo $product->getPrice(); ?></p>


           <?php if ($product instanceof MakeupProduct): ?>
               <div class="shade">
              Shade: <?php echo $product->getShade(); ?>
               </div>
        <?php endif; ?>

    <button class="add-to-cart">Add to Cart</button>

  </div>

<?php endforeach; ?>
      </div>
    </section>

    <section id="sm-banner" class="container">
      <div class="banner-box">
        <h4>Crazy deals</h4>
        <h2>Buy one get one free</h2>
        <span>The best products you need</span>
        <button>Learn more</button>
      </div>

      <div class="banner-box2">
        <h4>Crazy deals</h4>
        <h2>Buy one get one free</h2>
        <span>The best products you need</span>
        <button>Learn more</button>
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

    <div id="alert">Added to cart!</div>

</body>
</html>

<?php include '../includes/footer.php'; ?>