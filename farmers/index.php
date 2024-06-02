<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'farmer') {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Welcome, Farmer <?php echo $_SESSION['username']; ?></h1>
    <a href="add_product.php">Add Product</a> | <a href="view_products.php">View Products</a> | <a href="../logout.php">Logout</a>
</body>
</html>
