<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['last_visited_page'] = "cart.php";

if (!isset($_SESSION['cart_page_visits'])) {
    $_SESSION['cart_page_visits'] = 1;
} else {
    $_SESSION['cart_page_visits']++;
}

setcookie("last_cart_visit", date("Y-m-d H:i:s"), time() + (86400 * 30), "/");


include '../includes/header.php'; ?>

<?php if (isset($_SESSION['order_error'])): ?>
    <p style="color:red; font-weight:bold; text-align:center;">
        <?php echo $_SESSION['order_error']; ?>
    </p>
    <?php unset($_SESSION['order_error']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['order_success'])): ?>
    <p style="color:green; font-weight:bold; text-align:center;">
        <?php echo $_SESSION['order_success']; ?>
    </p>
    <?php unset($_SESSION['order_success']); ?>
<?php endif; ?>


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
    <form action="place-order.php" method="POST">
        <button type="submit" id="orderNow">Order Now</button>
    </form>
    </form>
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