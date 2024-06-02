<?php
session_start();
include '../db.php';

$farmer_id = $_SESSION['user_id'];
$sql = "SELECT * FROM products WHERE farmer_id = $farmer_id";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Products</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Your Products</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><img src="<?php echo $row['image']; ?>" width="100"></td>
            <td><a href="edit_product.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete_product.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>
