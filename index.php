<?php
require_once 'db.php';

$result = $conn->query("SELECT * FROM products");
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
        <li><a href="index.php#products">Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
    </ul>
</nav>

<section class="hero">

    <h1>Luxury Electronics</h1>

    <p>
        Discover premium technology designed for those who demand excellence,
        performance, and elegance.
    </p>

    <a href="#products" class="btn">
        Explore Collection
    </a>

</section>

<section class="products" id="products">

    <h2>Featured Products</h2>

    <div class="grid">

        <?php while($product = $result->fetch_assoc()): ?>

        <div class="card">

            <img
            src="assets/images/<?php echo htmlspecialchars($product['image']); ?>"
            alt="<?php echo htmlspecialchars($product['name']); ?>"
            class="product-image"
            >

            <h3>
                <a
                href="product.php?id=<?php echo $product['id']; ?>"
                class="product-link"
                >
                    <?php echo htmlspecialchars($product['name']); ?>
                </a>
            </h3>

            <p>
                <?php echo htmlspecialchars($product['description']); ?>
            </p>

            <div class="price">
                $<?php echo number_format($product['price'], 2); ?>
            </div>

            <br>

            <a
            href="add_to_cart.php?id=<?php echo $product['id']; ?>"
            class="btn"
            >
                Add To Cart
            </a>

        </div>

        <?php endwhile; ?>

    </div>

</section>

<footer>
    © 2026 TechCart Luxury Electronics
</footer>

</body>
</html>