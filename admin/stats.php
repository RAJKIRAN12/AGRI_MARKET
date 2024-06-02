<?php
session_start();
include '../db.php';

$sql = "SELECT COUNT(id) as total_users FROM users";
$result = $conn->query($sql);
$total_users = $result->fetch_assoc()['total_users'];

$sql = "SELECT COUNT(id) as total_products FROM products";
$result = $conn->query($sql);
$total_products = $result->fetch_assoc()['total_products'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistics</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Statistics</h2>
    <p>Total Users: <?php echo $total_users; ?></p>
    <p>Total Products: <?php echo $total_products; ?></p>
</body>
</html>
<?php $conn->close(); ?>
