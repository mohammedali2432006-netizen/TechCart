<?php
session_start();
require_once 'db.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = (int)$_GET['id'];

$result = $conn->query("SELECT * FROM products WHERE id = $id");

if ($result->num_rows === 0) {
    header("Location: index.php");
    exit;
}

$product = $result->fetch_assoc();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$_SESSION['cart'][] = [
    'id' => $product['id'],
    'name' => $product['name'],
    'price' => $product['price']
];

header("Location: cart.php");
exit;
?>