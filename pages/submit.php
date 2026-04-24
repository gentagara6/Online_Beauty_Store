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

    // Leximi i të dhënave me POST
    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($users as $user) {

        if ($user['email'] === $email && $user['password'] === $password) {

            // Ruajtja e user-it në SESSION
            $_SESSION['user'] = $user;

            // Mesazh në SESSION
            $_SESSION['response'] = "Welcome " . $user['email'];

            // Cookie për personalizim
            setcookie("welcomeUser", $user['email'], time() + 86400, "/");

            header("Location: index.php?res=welcome");
            exit;
        }
    }

    // Nëse kredencialet janë gabim
    header("Location: login.php?res=invalid");
    exit;
}

header("Location: login.php");
exit;
?>