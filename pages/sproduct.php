<?php include '../includes/header.php'; ?>

<section id="prodetails" class="section-p1">

    <div class="single-pro-image">
        <img src="" width="100%" id="MainImg" alt="Product Image">
        <div class="small-img-group">
            <div class="small-img-col"> </div>
            <div class="small-img-col"> </div>
            <div class="small-img-col"> </div>
            <div class="small-img-col"> </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6 id="product-category">Home / Cream</h6>
        <h4 id="product-name">Product Name</h4>
        <h2 id="product-price">$0.00</h2>
        <input type="number" value="1">
        <button class="normal add-to-cart">Add To Cart</button>
        <h4>Product Details</h4>
        <span id="product-description">Product description will load here...</span>
    </div>
</section>

<section class="shopping container">
    <h2>Featured Products</h2>
    <div class="products">
        <div class="product">
            <img src="../assets/img/peptide_glazing_fluid.webp" alt="Product 3">
            <h3>Peptide Glazing Fluid</h3>
            <p>$32.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
        <img src="../assets/img/lip_shape_set.webp" alt="Product 3">
            <h3>Peptide Lip Shape Set</h3>
            <p>$60.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
            <img src="../assets/img/sprinkle_blush.webp" alt="Product 3">
            <h3>Sprinkle Blush</h3>
            <p>$25.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
            <img src="../assets/img/ribbon_lip_tint.webp" alt="Product 3">
            <h3>Ribbon Lip Tint</h3>
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

<div id="alert">Added to cart!</div>

<script src="../assets/js/sproducts.js"></script>

<script>
    const params = new URLSearchParams(window.location.search);
    const productId = parseInt(params.get("id"));

    const product = products.find(p => p.id === productId);

    if (product) {
        document.getElementById("product-name").innerText = product.name;
        document.getElementById("product-price").innerText = "$" + product.price;
        document.getElementById("product-description").innerText = product.description;

        document.getElementById("MainImg").src = product.img;

        const group = document.querySelector(".small-img-group");
        group.innerHTML = "";

        product.images.forEach(src => {
            group.innerHTML += `
                <div class="small-img-col">
                    <img src="${src}" class="small-img">
                </div>
            `;
        });

        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("small-img")) {
                document.getElementById("MainImg").src = e.target.src;
            }
        });
    }
</script>

<?php include '../includes/footer.php'; ?>