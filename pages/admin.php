<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header("Location: index.php");
    exit;
}

$file = "../orders.json";
$sales = [];

if (file_exists($file)) {
    $sales = json_decode(file_get_contents($file), true);
}

$total = 0;

foreach ($sales as $sale) {
    $total += $sale['total'];
}

$orderCount = count($sales);
?>

<?php include '../includes/header.php'; ?>

<section class="container" style="padding:40px;">
    <div style="text-align:center; margin-bottom:30px;">
        <h1>Admin Panel</h1>
        <p>Only administrators can access this page.</p>
    </div>

    <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap; margin-bottom:30px;">
        <div style="padding:20px; min-width:200px; background:#faf7f9; border-radius:15px; text-align:center;">
            <h3>Total Orders</h3>
            <p style="font-size:22px; font-weight:bold;"><?php echo $orderCount; ?></p>
        </div>

        <div style="padding:20px; min-width:200px; background:#faf7f9; border-radius:15px; text-align:center;">
            <h3>Total Sales</h3>
            <p style="font-size:22px; font-weight:bold;">$<?php echo $total; ?></p>
        </div>
    </div>

    <h2 style="text-align:center; margin-bottom:20px;">Sales List</h2>

    <table style="width:100%; border-collapse:collapse; text-align:center;">
        <thead>
            <tr style="background:#cfc6cf;">
                <th style="padding:12px;">Order ID</th>
                <th style="padding:12px;">Customer</th>
                <th style="padding:12px;">Products</th>
                <th style="padding:12px;">Total</th>
                <th style="padding:12px;">Date</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($sales as $sale): ?>
                <tr style="border-bottom:1px solid #ddd;">
                    <td style="padding:12px;"><?php echo $sale['id']; ?></td>
                    <td style="padding:12px;"><?php echo htmlspecialchars($sale['customer']); ?></td>
                    <td style="padding:12px;">
                        <?php foreach ($sale['items'] as $item): ?>
                            <?php echo htmlspecialchars($item['name']); ?>
                            ($<?php echo $item['price']; ?>)<br>
                        <?php endforeach; ?>
                    </td>
                    <td style="padding:12px;">$<?php echo $sale['total']; ?></td>
                    <td style="padding:12px;"><?php echo $sale['date']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php include '../includes/footer.php'; ?>