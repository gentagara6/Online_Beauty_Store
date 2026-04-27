<?php
session_start();

$users = [
    [
        "email" => "admin@test.com",
        "password" => "admin123",
        "role" => "admin"
    ],
    [
        "email" => "genta@test.com",
        "password" => "genta123",
        "role" => "user"
    ],
    [
        "email" => "ernesa@test.com",
        "password" => "ernesa123",
        "role" => "user"
    ],
    [
        "email" => "era@test.com",
        "password" => "era123",
        "role" => "user"
    ],
    [
        "email" => "enesa@test.com",
        "password" => "enesa123",
        "role" => "user"
    ],
    [
        "email" => "ermira@test.com",
        "password" => "ermira123",
        "role" => "user"
    ]
];

if (isset($_POST['btnLogin'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

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