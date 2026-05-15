<?php
session_start();

if (!isset($_SESSION['user'])) {

    $_SESSION['order_error'] =
    "You must login before placing an order.";

    header("Location: cart.php");
    exit();
}

$order = [
    "id" => time(),
    "customer" => $_SESSION['user']['email'],
    "date" => date("Y-m-d H:i:s")
];

$file = "../orders.txt";

$content =
"Order ID: " . $order['id'] . "\n" .
"Customer: " . $order['customer'] . "\n" .
"Date: " . $order['date'] . "\n" .
"--------------------------\n";

file_put_contents($file, $content, FILE_APPEND);

$_SESSION['order_success'] =
"Order sent successfully.";

echo "
<script>
    Object.keys(localStorage).forEach(key => {
        if(key.startsWith('cart_')){
            localStorage.removeItem(key);
        }
    });

    window.location.href='cart.php';
</script>
";
exit();
?>