<?php session_start(); 

$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST['email'];

  if(empty($email)){
    $message = "please enter your email";

  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $message = "Invalid email";
  }
  else{
    $message = "Successfully subscribed";
  }
}

$file = "visits.txt";
if(!file_exists($file)){
    file_put_contents($file,0);
}

$visits = file_get_contents($file);
$visits++;
file_put_contents($file,$visits);
?>
<?php include '../includes/header.php'; ?>

<section id="page-header" class ="about-header">
    <h2>#KnowUs</h2>
    <p>Inspired by nature, designed for healthy, glowing skin.</p>
</section>

<p style="text-align: center; margin-top:15px;">
   👀 Visitors: <?php echo $visits; ?>
</p>
<section id="about-head" class="section-p1">
    <img src="../assets/img/rhode1.jpg" style="margin-top: 40px;" >

    <div id="who">
        <h1>Who we are ?</h1>
        <p>We are a skincare and beauty brand dedicated to creating thoughtful, high-quality products that nurture and enhance your natural beauty. We believe healthy skin is the foundation of confidence, and our mission is to make skincare simple, effective, and enjoyable.</p>

        <p> Inspired by nature and supported by science, our formulations are crafted with carefully chosen ingredients that are gentle yet effective. We focus on delivering real results while respecting your skin’s unique needs.</p>
         <br>
         <p>Every product reflects our commitment to quality, transparency, and care. More than just skincare, we see our products as part of your daily self-care ritual—helping you feel comfortable, confident, and radiant in your own skin.
        </p><br>
        <abbr title="Nourishing skincare crafted to help your skin look healthier, brighter, and naturally radiant.">
         Nourishing skincare crafted to help your skin look healthier, brighter, and naturally radiant.
        </abbr>
        
        <br><br>

        <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">
            Radiant skin isn’t a miracle; it’s the result of consistent care, gentle ingredients, and a little love every day.
        </marquee>
    </div>
</section>

<section id="founder-note" class="section-p1">
    <div class="founder-box">
        <h3>A NOTE FROM OUR FOUNDER</h3>

        <p>
            This brand was born from countless conversations, personal experiences, and a deep desire to create beauty products that truly feel good to use. I wanted skincare and beauty essentials that are as nurturing as they are effective—products that bring a sense of care and confidence to every routine.
        </p>

        <p>
            Every product is thoughtfully crafted with intention, blending high-quality ingredients with careful formulation to support your skin, enhance your natural beauty, and make self-care feel like a true ritual. Beyond results, my goal has always been to create products that inspire a moment of calm, joy, and connection with yourself.It’s an honor to share these products with you and be part of your self-care journey. Thank you for trusting us to support and celebrate your natural beauty every day.
        </p>
    </div>
</section>

<h1 class="title">Skincare and beauty designed to celebrate and support your natural self!</h1>

<div class="cards">
  <div class="card">
    <h3>Our Mission</h3>
    <p>Our mission is to create high-quality, effective, and safe skincare products that enhance the natural beauty of every individual. We strive to combine innovative research with natural ingredients to help our customers feel confident, healthy, and radiant every day..</p>
  </div>

  <div class="card">
    <h3>Our Values</h3>
    <p>We believe in transparency, honesty, and sustainability. Our values guide everything we do — from sourcing natural ingredients responsibly to ensuring our products are cruelty-free and eco-friendly. We are committed to making beauty accessible and ethical for everyone.</p>
  </div>

  <div class="card">
    <h3>Our Story</h3>
    <p>Our journey began with a passion for clean and simple skincare. We noticed a lack of products that were both effective and gentle, so we set out to create solutions that truly work. From humble beginnings, we have grown into a brand that cares deeply about our customers’ needs and wellbeing.</p>
  </div>

  <div class="card">
    <h3>Our Vision</h3>
    <p>Our vision is to become a trusted leader in skincare, empowering people worldwide to feel confident in their own skin. We aim to inspire healthy routines, promote self-care, and continually innovate to meet the evolving needs of our community.</p>
  </div>
</div>

<section id="newsletter" class="container">
    <div class="newstext">
        <h4>Sign up for newsletter</h4>
        <p>Get notifications about new products and <span>special offers!</span></p>
    </div>

    <div class="form">
        <form method="POST">
            <input type="text" name="email" placeholder="Your email Address">
            <button class="normal">Sign up</button>
        </form>

        <?php if($message): ?>
            <p style="margin-top:10px; color:green;">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<?php include '../includes/footer.php'; ?>