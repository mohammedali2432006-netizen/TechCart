<?php
include "auth.php";
include "../db.php";

$id = $_GET['id'];

$product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $conn->query("UPDATE products SET
        name='$name',
        price='$price',
        category='$category'
        WHERE id=$id");

    header("Location: view_products.php");
}
?>

<form method="POST">
    <input name="name" value="<?= $product['name'] ?>"><br>
    <input name="price" value="<?= $product['price'] ?>"><br>
    <input name="category" value="<?= $product['category'] ?>"><br>
    <button name="update">Update</button>
</form>