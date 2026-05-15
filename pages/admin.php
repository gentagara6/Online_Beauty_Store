<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header("Location: index.php");
    exit;
}

$file = "../orders.txt";

$orders = [];
$orderCount = 0;

if (file_exists($file)) {

    $content = file_get_contents($file);

    $separatedOrders = explode("--------------------------", $content);

    foreach ($separatedOrders as $orderText) {

        $orderText = trim($orderText);

        if (!empty($orderText)) {

            $lines = explode("\n", $orderText);

            $id = str_replace("Order ID: ", "", $lines[0] ?? "");
            $customer = str_replace("Customer: ", "", $lines[1] ?? "");
            $date = str_replace("Date: ", "", $lines[2] ?? "");

            $orders[] = [
                "id" => $id,
                "customer" => $customer,
                "date" => $date
            ];
        }
    }

    $orderCount = count($orders);
}
?>

<?php include '../includes/header.php'; ?>

<section class="container" style="padding:40px;">

    <div style="text-align:center; margin-bottom:30px;">
        <h1>Admin Panel</h1>
        <p>Only administrators can access this page.</p>
    </div>

    <div style="display:flex; justify-content:center; margin-bottom:30px;">
        <div style="padding:20px; min-width:220px; background:#faf7f9; border-radius:15px; text-align:center;">
            <h3>Total Orders</h3>
            <p style="font-size:22px; font-weight:bold;">
                <?php echo $orderCount; ?>
            </p>
        </div>
    </div>

    <h2 style="text-align:center; margin-bottom:20px;">
        Orders List
    </h2>

    <table style="width:100%; border-collapse:collapse; text-align:center;">

        <thead>
            <tr style="background:#cfc6cf;">
                <th style="padding:12px;">Order ID</th>
                <th style="padding:12px;">Customer</th>
                <th style="padding:12px;">Date</th>
            </tr>
        </thead>

        <tbody>

            <?php if (!empty($orders)): ?>

                <?php foreach ($orders as $order): ?>

                    <tr style="border-bottom:1px solid #ddd;">

                        <td style="padding:12px;">
                            <?php echo htmlspecialchars($order['id']); ?>
                        </td>

                        <td style="padding:12px;">
                            <?php echo htmlspecialchars($order['customer']); ?>
                        </td>

                        <td style="padding:12px;">
                            <?php echo htmlspecialchars($order['date']); ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            <?php else: ?>

                <tr>
                    <td colspan="3" style="padding:20px;">
                        No orders yet.
                    </td>
                </tr>

            <?php endif; ?>

        </tbody>

    </table>

</section>

<?php include '../includes/footer.php'; ?>