<?php
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - TechCart</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>

.about-container{
    max-width:1100px;
    margin:60px auto;
    padding:40px;
}

.about-card{
    background:rgba(20,20,20,.9);
    border:1px solid rgba(255,255,255,.1);
    border-radius:25px;
    padding:50px;
    text-align:center;
}

.about-card h1{
    font-size:55px;
    margin-bottom:25px;
}

.about-card p{
    font-size:20px;
    color:#cccccc;
    line-height:1.8;
    margin-bottom:20px;
}

.about-features{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
    margin-top:40px;
}

.feature{
    background:#1b1b1b;
    padding:25px;
    border-radius:20px;
}

.feature h3{
    margin-bottom:10px;
}

</style>

</head>
<body>

<nav>
    <div class="logo">TECHCART</div>


<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="cart.php">Cart</a></li>
</ul>


</nav>

<div class="about-container">

```
<div class="about-card">

    <h1>About TechCart</h1>

    <p>
        TechCart is a premium electronics store dedicated to bringing
        the latest technology products to customers around the world.
    </p>

    <p>
        Our mission is to provide high-quality devices, competitive prices,
        and an exceptional shopping experience.
    </p>

    <div class="about-features">

        <div class="feature">
            <h3>Premium Products</h3>
            <p>Latest technology from top brands.</p>
        </div>

        <div class="feature">
            <h3>Fast Delivery</h3>
            <p>Reliable and secure shipping services.</p>
        </div>

        <div class="feature">
            <h3>Customer Support</h3>
            <p>Dedicated support whenever you need help.</p>
        </div>

    </div>

</div>


</div>

</body>
</html>
