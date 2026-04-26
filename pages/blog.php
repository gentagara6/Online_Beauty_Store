
<?php include '../includes/header.php'; 

require_once '../classes/BlogRepository.php';

$repo = new BlogRepository();
$posts = $repo->getPosts();
?>

<section  id="page-header" class="blog-header">
    <h2>#learnmore</h2>
    <p>Learn more about our beauty products</p>
</section>

<section id="blog" class="container">
    <?php foreach ($posts as $post): ?>

    <div class="blog-box">

        <div class="blog-img">
            <img src="<?= $post->image ?>" alt="">
        </div>

        <div class="blog-details">

            <h4 style="color:black;">
                <?= htmlspecialchars($post->title) ?>
            </h4>

            <p>
                <?= $post->shortText; ?>
                <span class="more-text">
                    <?= $post->fullText; ?>
                </span>
            </p>

            <a href="#" class="read-more">CONTINUE READING</a>
            <p><a href="shop.php">Shop Now!</a></p>

        </div>

        <h1><?= $post->date ?></h1>

    </div>

<?php endforeach; ?>
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