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

<style>

nav{
    background:linear-gradient(
        135deg,
        #3b0f19,
        #5c1b2c,
        #7a2437,
        #5c1b2c
    );
    box-shadow:
    0 0 20px rgba(122,36,55,.6),
    0 0 40px rgba(122,36,55,.3);
}

footer{
    background:linear-gradient(
        135deg,
        #3b0f19,
        #5c1b2c,
        #7a2437,
        #5c1b2c
    );
    color:white;
    text-align:center;
    padding:25px;
    margin-top:80px;

    box-shadow:
    0 0 20px rgba(122,36,55,.6),
    0 0 40px rgba(122,36,55,.3);
}

.hero{
    text-align:center;
    padding:120px 20px;
}

.hero h1{
    font-size:70px;
    margin-bottom:20px;
}

.hero p{
    max-width:700px;
    margin:auto;
    font-size:20px;
    color:#cccccc;
    margin-bottom:30px;
}

</style>

</head>

<body>

<nav>
    <div class="logo">TECHCART</div>

<ul>
    <li><a href="products.php">Products</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="cart.php">Cart</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="login.php">login</a></li>

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
    © 2026 TechCart Luxury Electronics | Premium Technology Store
</footer>

</body>
</html>
