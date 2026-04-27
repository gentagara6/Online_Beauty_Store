<?php 
session_start(); 
?>

<?php include '../includes/header.php'; ?>

<section class="container" style="padding: 60px; text-align:center; margin-bottom: 80px;">
    <h2>Login Form</h2>

    <?php if (isset($_GET['res'])): ?>
        <?php if ($_GET['res'] == "logout"): ?>
            <p id="login-message" style="color:green;">
                You have logged out successfully.
            </p>
        <?php elseif ($_GET['res'] == "invalid"): ?>
            <p id="login-message" style="color:red;">
                Incorrect email or password. Please try again.
            </p>
        <?php elseif ($_GET['res'] == "invalid_email"): ?>
            <p id="login-message" style="color:red;">
                Invalid email format.
            </p>
        <?php endif; ?>

        <script>
            setTimeout(function () {
                const msg = document.getElementById("login-message");
                if (msg) msg.style.display = "none";

                window.history.replaceState({}, document.title, window.location.pathname);
            }, 3000);
        </script>
    <?php endif; ?>

    <form method="POST" action="submit.php" style="max-width:400px; margin:30px auto;">
        <input 
            type="email" 
            name="email" 
            placeholder="Email"
            required
            style="display:block; width:100%; padding:12px; margin:10px 0; border:1px solid black; background:white; color:black;"
        >
        <input 
            type="password" 
            name="password" 
            placeholder="Password"
            required
            style="display:block; width:100%; padding:12px; margin:10px 0; border:1px solid black; background:white; color:black;"
        >
        <button type="submit" name="btnLogin" class="normal">Login</button>
    </form>
</section>

<?php include '../includes/footer.php'; ?>