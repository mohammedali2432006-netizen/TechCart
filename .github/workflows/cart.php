<?php
session_start();
require_once 'db.php';

$cart = $_SESSION['cart'] ?? [];

$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Cart</title>

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<nav>
    <div class="logo">TECHCART</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
    </ul>
</nav>

<section class="products">

    <h2>Your Cart</h2>

    <div class="grid">

        <?php foreach($cart as $id): ?>

            <?php

            $result = $conn->query(
                "SELECT * FROM products WHERE id=$id"
            );

            $product = $result->fetch_assoc();

            if(!$product){
                continue;
            }

            $total += $product['price'];

            ?>

            <div class="card">

                <img
                src="assets/images/<?php echo $product['image']; ?>"
                class="product-image"
                >

                <h3>
                    <?php echo $product['name']; ?>
                </h3>

                <p>
                    <?php echo $product['description']; ?>
                </p>

                <div class="price">
                    $<?php echo $product['price']; ?>
                </div>

            </div>

        <?php endforeach; ?>

    </div>

    <h2 style="margin-top:50px;">
        Total: $<?php echo number_format($total,2); ?>
    </h2>

    <br>

    <a href="checkout.php" class="btn">
        Proceed To Checkout
    </a>

</section>

</body>
</html>