<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Welcome, Admin <?php echo $_SESSION['username']; ?></h1>
    <a href="users.php">Manage Users</a> | <a href="stats.php">View Statistics</a> | <a href="../logout.php">Logout</a>
</body>
</html>
