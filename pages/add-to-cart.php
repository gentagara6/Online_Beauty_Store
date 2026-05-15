<?php
session_start();

$product = [
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'quantity' => 1
];

$_SESSION['cart'][] = $product;

header("Location: cart.php");
exit();
?>