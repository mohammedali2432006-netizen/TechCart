<?php
require_once 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM products WHERE id=$id");

$product = $result->fetch_assoc();

if (!$product) {
    die("Product not found");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $product['name']; ?></title>
</head>
<body>

<h1><?php echo $product['name']; ?></h1>

<img
src="assets/images/<?php echo $product['image']; ?>"
width="400"
>

<p>
<?php echo $product['description']; ?>
</p>

<h2>
$<?php echo $product['price']; ?>
</h2>

<a href="index.php">
Back
</a>

</body>
</html>