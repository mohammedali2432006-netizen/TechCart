<?php
require_once 'db.php';

$result = $conn->query("SELECT * FROM products LIMIT 5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TechCart Luxury Store</title>

<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<nav>
    <div class="logo">TECHCART</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
    </ul>
</nav>

<section class="hero">

    <h1>Luxury Electronics</h1>

    <p>
        Discover premium technology designed for those who demand excellence,
        performance and elegance.
    </p>

    <a href="products.php" class="btn">
        Explore Collection
    </a>

</section>

<section class="products" id="products">

    <h2>Featured Products</h2>

    <div class="grid">

        <?php while($product = $result->fetch_assoc()): ?>

        <div class="card">

            <!-- فتح صفحة المنتج -->
            <a href="product.php?id=<?php echo $product['id']; ?>">

                <img
                    src="assets/images/<?php echo htmlspecialchars($product['image']); ?>"
                    alt="<?php echo htmlspecialchars($product['name']); ?>"
                    class="product-image"
                >

            </a>

            <div class="card-content">

                <h3>
                    <?php echo htmlspecialchars($product['name']); ?>
                </h3>

                <p>
                    <?php echo htmlspecialchars($product['description']); ?>
                </p>

                <div class="price">
                    $<?php echo number_format($product['price'], 2); ?>
                </div>

                <a
                    href="add_to_cart.php?id=<?php echo $product['id']; ?>"
                    class="btn btn-cart"
                >
                    Add To Cart
                </a>

            </div>

        </div>

        <?php endwhile; ?>

    </div>

</section>

<footer>
    © 2026 TechCart Luxury Electronics
</footer>

</body>
</html>