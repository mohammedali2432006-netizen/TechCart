<?php
include "auth.php";
include "../db.php";

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $imageName = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "../uploads/" . $imageName);

    $conn->query("INSERT INTO products (name, price, category, image)
    VALUES ('$name', '$price', '$category', '$imageName')");

    header("Location: view_products.php");
}
?>

<form method="POST" enctype="multipart/form-data">
    <input name="name" placeholder="Name"><br>
    <input name="price" placeholder="Price"><br>
    <input name="category" placeholder="Category"><br>
    <input type="file" name="image"><br>
    <button name="add">Add Product</button>
</form>