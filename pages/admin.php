<?php
session_start();

if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header("Location: index.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<h1>Admin Panel</h1>
<p>Kjo faqe mund të aksesohet vetëm nga admin.</p>