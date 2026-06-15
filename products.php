<?php
require_once 'db.php';

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products - TechCart</title>

<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<nav>
    <div class="logo">TECHCART</div>

    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="cart.php">Cart</a></li>
    <li><a href="contact.php">Contact Us</a></li>
</ul>
</nav>

<section class="products">

    <h2>All Products</h2>

    <div class="grid">

        <?php while($product = $result->fetch_assoc()): ?>

        <div class="card">

            <a href="product.php?id=<?php echo $product['id']; ?>">

                <img
                    src="assets/images/<?php echo htmlspecialchars($product['image']); ?>"
                    class="product-image"
                >

            </a>

            <div class="card-content">

                <h3><?php echo htmlspecialchars($product['name']); ?></h3>

                <p><?php echo htmlspecialchars($product['description']); ?></p>

                <div class="price">
                    $<?php echo number_format($product['price'], 2); ?>
                </div>

                <a href="add_to_cart.php?id=<?php echo $product['id']; ?>" class="btn btn-cart">
                    Add To Cart
                </a>

            </div>

        </div>

        <?php endwhile; ?>

    </div>

</section>

</body>
</html>