<?php
session_start();

$signupMessage = "";
$signupType = "";

if (isset($_POST['signup'])) {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $nameValid = preg_match("/^[a-zA-Z\s]{2,50}$/", $fullname);
    $emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
    $passwordValid = strlen($password) >= 4;

    if (!$nameValid) {
        $signupMessage = "Invalid full name.";
        $signupType = "error";
    } elseif (!$emailValid) {
        $signupMessage = "Invalid email format.";
        $signupType = "error";
    } elseif (!$passwordValid) {
        $signupMessage = "Password must contain at least 4 characters.";
        $signupType = "error";
    } else {

        $registeredUsers = $_SESSION['registered_users'] ?? [];

        foreach ($registeredUsers as $user) {
            if ($user['email'] === $email) {
                $signupMessage = "This email is already registered.";
                $signupType = "error";
                break;
            }
        }

        if ($signupMessage == "") {
            $_SESSION['registered_users'][] = [
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password,
                'role' => 'user'
            ];

            header("Location: login.php?res=signup_success");
            exit();
        }
    }
}
?>

<?php include '../includes/header.php'; ?>

<section class="container" style="padding: 60px; text-align:center; margin-bottom: 80px;">
    <h2>Signup Form</h2>

    <?php if (!empty($signupMessage)): ?>
        <p style="color: <?php echo ($signupType == 'error') ? 'red' : 'green'; ?>;">
            <?php echo $signupMessage; ?>
        </p>
    <?php endif; ?>

    <form method="POST" action="signup.php" style="max-width:400px; margin:30px auto;">
        <input 
            type="text" 
            name="fullname" 
            placeholder="Full Name"
            required
            style="display:block; width:100%; padding:12px; margin:10px 0; border:1px solid black; background:white; color:black;"
        >

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

        <button type="submit" name="signup" class="normal">Signup</button>
    </form>

    <p>
        Already have an account?
        <a href="login.php">Login here</a>
    </p>
</section>

<?php include '../includes/footer.php'; ?>