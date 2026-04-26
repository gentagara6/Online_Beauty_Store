<?php include '../includes/header.php'; ?>

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

<?php include '../includes/footer.php'; ?>