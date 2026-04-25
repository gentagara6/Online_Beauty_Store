<?php include '../includes/header.php'; ?> 
<?php
 $products = [
    ["id"=>1, "name"=>"Glazing Milk","price"=>32,"image"=>"glazing_milk.webp"],
    ["id"=>2, "name"=>"Barrier Restore Cream","price"=>32,"image"=>"barrier_restore_cream.webp"],
    ["id"=>3, "name"=>"Peptide Glazing Fluid","price"=>32,"image"=>"peptide_glazing_fluid.webp"],
    ["id"=>4, "name"=>"Pineapple Cleanser","price"=>30,"image"=>"pineapple_refresh.webp"],
    ["id"=>5, "name"=>"Espresso Lip Tint","price"=>20,"image"=>"espresso_lip_tint.webp"],
    ["id"=>6, "name"=>"Rasberry Jelly Lip Tint","price"=>20,"image"=>"rasberry_lip_tint.webp"],
    ["id"=>7, "name"=>"Ribbon Lip Tint","price"=>20,"image"=>"ribbon_lip_tint.webp"],
    ["id"=>8, "name"=>"Toast Lip Tint","price"=>20,"image"=>"toast_liptint.webp"]
   ];

   usort($products,function ($a, $b) {
    return $a['price'] <=> $b['price'];
   });

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
          <?php 
          foreach($products as $product):
            if($product['price'] > 0):
            ?>

          <div class="product">
            <img src="../assets/img/<?php echo $product['image']; ?>">
           <h3><?php echo $product['name']; ?></h3>
           <p>$<?php echo $product['price']; ?></p>

           <?php if($product['price'] < 25): ?>
            <span style="color:red;">Sale</span>
            <?php endif; ?>

            <button class="add-to-cart">Add to Cart</button>
          </div>

          <?php endif; ?>
          <?php endforeach; ?>

        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

        