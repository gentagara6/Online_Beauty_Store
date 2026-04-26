<?php include '../includes/header.php'; ?> 
<?php
require_once '../classes/product.php';
require_once '../classes/makeupproduct.php';

$products = [
    new Product("Glazing Milk", 32,"Skincare", "glazing_milk.webp"),
    new Product( "Barrier Restore Cream", 32,"Skincare", "barrier_restore_cream.webp"),
    new Product( "Peptide Glazing Fluid", 32,"Skincare", "peptide_glazing_fluid.webp"),
    new Product( "Pineapple Cleanser", 30,"Skincare", "pineapple_refresh.webp"),

    new MakeupProduct( "Espresso Lip Tint", 20,"Makeup", "espresso_lip_tint.webp", "Brown"),
    new MakeupProduct( "Raspberry Jelly Lip Tint", 20,"Makeup", "rasberry_lip_tint.webp", "Burgundy"),
    new MakeupProduct( "Ribbon Lip Tint", 20,"Makeup", "ribbon_lip_tint.webp", "Pink"),
    new MakeupProduct( "Toast Lip Tint", 20,"Makeup", "toast_liptint.webp", "Nude")
];

  

   $welcomeMessage=null;
   if(isset($_GET['res']) && isset($_SESSION['user'])){
    if ($_GET['res'] == "welcome"){
      $welcomeMessage = "Welcome " .htmlspecialchars($_SESSION['user']['email']);
    }
   }

   ?>

   <?php if($welcomeMessage): ?>
    <p id="welcome-message" style="color: green; text-align:center; margin: 20px;">
    <?php echo $welcomeMessage; ?>
    </p>

    <script>
        setTimeout(function () {
            const msg = document.getElementById("welcome-message");
            if (msg) msg.style.display = "none";

            window.history.replaceState({}, document.title, window.location.pathname);
        }, 3000);
    </script>
<?php endif; ?>


    <section  id="hero">
        <h4>Achieve<br>Glass Skin</h4>
        <p>The Best Products</p>
        <a href="login.php"><button>Login</button></a>
    </section>


    <section class="shopping container">
        <h2>Shop Our Products</h2>

        <div class="products">

       <?php foreach($products as $product): ?>

         <?php if($product->getPrice() > 0): ?>

        <div class="product">

    <img src="../assets/img/<?php echo $product->getImage(); ?>">

    <h3><?php echo $product->getName(); ?></h3>

    <p>$<?php echo $product->getPrice(); ?></p>

    <?php if($product instanceof MakeupProduct): ?>
        <small>Shade: <?php echo $product->getShade(); ?></small>
    <?php endif; ?>

    <button class="add-to-cart">Add to Cart</button>

  </div>

  <?php endif; ?>

<?php endforeach; ?>

</div>
    </section>

    <?php include '../includes/footer.php'; ?>

        