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

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#0a0a0a;
    color:white;
}

nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 60px;
    background:#111;
    border-bottom:1px solid #d4af37;
}

.logo{
    color:#d4af37;
    font-size:32px;
    font-weight:bold;
    letter-spacing:2px;
}

nav ul{
    list-style:none;
    display:flex;
    gap:30px;
}

nav a{
    color:white;
    text-decoration:none;
    transition:.3s;
}

nav a:hover{
    color:#d4af37;
}

.hero{
    height:60vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:20px;
}

.hero h1{
    font-size:80px;
    color:#d4af37;
    margin-bottom:20px;
}

.hero p{
    font-size:22px;
    color:#cccccc;
    max-width:700px;
    line-height:1.6;
}

.btn{
    margin-top:30px;
    background:#d4af37;
    color:black;
    padding:15px 35px;
    border-radius:40px;
    text-decoration:none;
    font-weight:bold;
}

.products{
    padding:80px 50px;
}

.products h2{
    text-align:center;
    color:#d4af37;
    font-size:42px;
    margin-bottom:40px;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

.card{
    background:#151515;
    border:1px solid rgba(212,175,55,.2);
    border-radius:15px;
    padding:25px;
    text-align:center;
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 0 30px rgba(212,175,55,.25);
    border-color:#d4af37;
}

.card h3{
    margin-bottom:10px;
    color:#fff;
}

.card p{
    color:#bbb;
    margin:15px 0;
}

.price{
    color:#d4af37;
    font-size:24px;
    font-weight:bold;
    margin-top:15px;
}

footer{
    background:#111;
    border-top:1px solid #d4af37;
    text-align:center;
    padding:25px;
    color:#999;
    margin-top:50px;
}

</style>
</head>

<body>

<nav>
    <div class="logo">TECHCART</div>

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Cart</a></li>
        <li><a href="#">Checkout</a></li>
    </ul>
</nav>

<section class="hero">
    <h1>Luxury Electronics</h1>

    <p>
        Discover premium technology designed for those who demand excellence,
        performance, and elegance.
    </p>

    <a href="#" class="btn">Explore Collection</a>
</section>

<section class="products">

    <h2>Featured Products</h2>

    <div class="grid">

        <?php while($product = $result->fetch_assoc()): ?>

            <div class="card">

                <h3>
                    <?php echo htmlspecialchars($product['name']); ?>
                </h3>

                <p>
                    <?php echo htmlspecialchars($product['description']); ?>
                </p>

                <div class="price">
                    $<?php echo $product['price']; ?>
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