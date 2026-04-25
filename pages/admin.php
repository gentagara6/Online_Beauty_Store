<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header("Location: index.php");
    exit;
}

$sales = [
    ["id"=>1, "product"=>"Lip Tint", "customer"=>"Ernesa", "price"=>20],
    ["id"=>2, "product"=>"Cleanser", "customer"=>"Genta", "price"=>25],
    ["id"=>3, "product"=>"Barrier Cream", "customer"=>"Ermira", "price"=>30],
    ["id"=>4, "product"=>"Glazing Milk", "customer"=>"Enesa", "price"=>32],
    ["id"=>5, "product"=>"Peptide Fluid", "customer"=>"Era", "price"=>32]
];

$total = 0;
foreach ($sales as $sale) {
    $total += $sale['price'];
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
                <th style="padding:12px;">Product</th>
                <th style="padding:12px;">Customer</th>
                <th style="padding:12px;">Price</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($sales as $sale): ?>
                <tr style="border-bottom:1px solid #ddd;">
                    <td style="padding:12px;"><?php echo $sale['id']; ?></td>
                    <td style="padding:12px;"><?php echo htmlspecialchars($sale['product']); ?></td>
                    <td style="padding:12px;"><?php echo htmlspecialchars($sale['customer']); ?></td>
                    <td style="padding:12px;">$<?php echo $sale['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php include '../includes/footer.php'; ?>