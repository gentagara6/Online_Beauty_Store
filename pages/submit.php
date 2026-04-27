<?php
session_start();

$users = [
    [
        "email" => "admin@test.com",
        "password" => "1234",
        "role" => "admin"
    ],
    [
        "email" => "genta@test.com",
        "password" => "1234",
        "role" => "user"
    ],
    [
        "email" => "ernesa@test.com",
        "password" => "1234",
        "role" => "user"
    ],
    [
        "email" => "era@test.com",
        "password" => "1234",
        "role" => "user"
    ],
    [
        "email" => "enesa@test.com",
        "password" => "1234",
        "role" => "user"
    ],
    [
        "email" => "ermira@test.com",
        "password" => "1234",
        "role" => "user"
    ]
];

if (isset($_POST['btnLogin'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: login.php?res=invalid_email");
    exit;
    }

    foreach ($users as $user) {

        if ($user['email'] === $email && $user['password'] === $password) {

            $_SESSION['user'] = $user;

            $_SESSION['response'] = "Welcome " . $user['email'];

            setcookie("welcomeUser", $user['email'], time() + 86400, "/");

            header("Location: index.php?res=welcome");
            exit;
        }
    }

    header("Location: login.php?res=invalid");
    exit;
}

header("Location: login.php");
exit;
?>