<?php
session_start();

$users = [
    [
        "email" => "admin@test.com",
        "password" => "1234",
        "role" => "admin"
    ],
    [
        "email" => "user@test.com",
        "password" => "1234",
        "role" => "user"
    ]
];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach($users as $user) {
        if($user['email'] == $email && $user['password'] == $password) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
            exit;
        }
    }

    echo "Invalid login!";
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>