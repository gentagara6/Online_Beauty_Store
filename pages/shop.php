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

   $newProducts = [
    ["name"=>"Sprinkle Blush","price"=>25,"image"=>"sprinkle_blush.webp"],
    ["name"=>"Sun Soak Blush","price"=>25,"image"=>"sun_soak_blush.webp"],
    ["name"=>"Peptide Lip Shape","price"=>24,"image"=>"peptide_lip_shape.webp"],
    ["name"=>"Peptide Lip Shape Set","price"=>60,"image"=>"lip_shape_set.webp"],
    ["name"=>"Scented_toast_tint","price"=>20,"image"=>"scented_toast_tint.webp"],
    ["name"=>"Scented_ribbon_tint","price"=>20,"image"=>"scented_ribbon_tint.webp"],
    ["name"=>"Scented_rj_tint","price"=>22,"image"=>"scented_rj_tint.webp"],
    ["name"=>"Scented_espresso_tint","price"=>23,"image"=>"scented_espresso_tint.webp"],

];


   usort($products,function ($a, $b) {
    return $a['price'] <=> $b['price'];
   });
   ?>



    <section id="page-header">
        <h4>Your Skincare Routine Starts Here!</h4>
        <p>Explore our full collection</p>
    </section>
<
    <section class="shopping container">
        <h2>Shop Our Products</h2>

        <div class="products">
          <?php foreach($products as $product): ?>
            <?php if($product['price'] > 0): ?>
              <div class="product" onclick="window.location.href = 'sproduct.php?id=<?php echo $product['id']; ?>';">

              <img src="../assets/img/<?php echo $product['image']; ?>">
              <h3><?php echo $product['name']; ?></h3>
              <p>$<?php echo $product['price']; ?></p>

              <?php if($product['price'] <25): ?>
                <span style="color:red;">Sale</span>
                <?php endif; ?>

                <button class="add-to-cart">Add to Cart</button>
              </div>
              <?php endif; ?>
            <?php endforeach; ?>
        </div>

        </section>

        <section class="shopping" id="new">
          <h2>New Arrivals</h2>

          <div class="products">
            <?php foreach($newProducts as $p): ?>
              <div class="product">
                <img src="../assets/img/<?php echo $p['image']; ?>">
                <h3><?php echo $p['name']; ?></h3>
                <p>$<?php echo $p['price']; ?></p>
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

        <?php include '../includes/footer.php'; ?>

        

