<?php
session_start();
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $farmer_id = $_SESSION['user_id'];

    // Image upload
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO products (name, description, price, image, farmer_id) VALUES ('$name', '$description', '$price', '$target_file', '$farmer_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>
    <form method="post" enctype="multipart/form-data" action="add_product.php">
        Name: <input type="text" name="name"><br>
        Description: <textarea name="description"></textarea><br>
        Price: <input type="text" name="price"><br>
        Image: <input type="file" name="image"><br>
        <input type="submit" value="Add Product">
    </form>
</body>
</html>
