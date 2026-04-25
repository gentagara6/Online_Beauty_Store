<?php include '../includes/header.php'; ?>

<?php
require_once '../classes/product.php';
require_once '../classes/makeupproduct.php';

// // create dummy products
// $products = [
//     new Product("Glazing Milk", 32, "Skincare","glazing_milk.webp"),
//     new Product("Barrier Restore Cream", 32, "Skincare","barrier_restore_cream.webp"),
//     new Product("Peptide Glazing Fluid",32,"Skincare","peptide_glazing_fluid.webp"),
//     new Product("Pineapple Cleanser",30,"Skincare","pineapple_refresh.webp"),
//     new MakeupProduct("Espresso Lip Tint",20,"Makeup","Brown","espresso_lip_tint.webp"),
//     new MakeupProduct("Raspberry Jelly Lip Tint", 20, "Makeup", "Burgundy","rasberry_lip_tint.webp"),
//     new MakeupProduct("Ribbon Lip Tint", 20, "Makeup", "Light Pink","ribbon_lip_tint.webp"),
//     new MakeupProduct("Toast Lip Tint",20,"Makeup","Nude","toast_liptint.webp"),
//     new MakeupProduct("Sprinkle Blush", 25, "Makeup", "Pink", "sprinkle_blush.webp"),
//     new MakeupProduct("Sun Soak Blush", 25, "Makeup", "Red", "sun_soak_blush.webp"),
//     new MakeupProduct("Peptide Lip Shape", 24, "Makeup", "Pink", "peptide_lip_shape.webp"),
//     new MakeupProduct("Peptide Lip Shape Set", 60, "Makeup", "Multi-Color", "lip_shape_set.webp"),
//     new MakeupProduct("Scented Espresso Lip Tint", 20, "Makeup", "Brown", "scented_espresso_tint.webp"),
//     new MakeupProduct("Scented Raspberry Jelly Lip Tint", 20, "Makeup", "Burgundy", "scented_rj_tint.webp"),
//     new MakeupProduct("Scented Ribbon Lip Tint", 20, "Makeup", "Pink", "scented_ribbon_tint.webp"),
//     new MakeupProduct("Scented Toast Lip Tint", 20, "Makeup", "Nude", "scented_toast_tint.webp")
// ];
// ?>

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
             <?php foreach(array_slice($products, 0, 8) as $index => $product): ?>
        <div class="product" onclick="window.location.href='sproduct.php?id=<?php echo $index+1; ?>';">

            <img src="../assets/img/<?php echo $product->getImage(); ?>" alt="product">

            <h3><?php echo $product->getName(); ?></h3>

            <p>$<?php echo $product->getPrice(); ?></p>

            <?php if ($product instanceof MakeupProduct): ?>
             <?php echo ' <small style="color:#777;">Shade: ' . $product->getShade() . '</small>'; ?>
            <?php endif; ?>

            <button class="add-to-cart">Add to Cart</button>
        </div>
        <?php endforeach; ?>

        </div>
    </section>

    <section class="shopping" id="new">
      <h2>New arrivals</h2>

      <div class="products">
         <?php foreach(array_slice($products, 8) as $index => $product): ?>
        <div class="product">

            <img src="../assets/img/<?php echo $product->getImage(); ?>" alt="product">

            <h3><?php echo $product->getName(); ?></h3>

            <p>$<?php echo $product->getPrice(); ?></p>

            <?php if ($product instanceof MakeupProduct): ?>
              <?php echo ' <small style="color:#777;">Shade: ' . $product->getShade() . '</small>'; ?>
             <?php endif; ?>

            <button class="add-to-cart">Add to Cart</button>
        </div>
        <?php endforeach; ?>
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