<?php
session_start();

$cart = $_SESSION['cart'] ?? [];
$total = 0;

foreach ($cart as $item) {
    $total += $item['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>

.checkout-container{
    max-width:800px;
    margin:60px auto;
    padding:30px;
    background:rgba(20,20,20,.9);
    border-radius:25px;
    border:1px solid rgba(255,255,255,.1);
}

.checkout-title{
    text-align:center;
    margin-bottom:30px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
}

.form-group input{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    background:#2a2a2a;
    color:white;
}

.total{
    text-align:center;
    font-size:32px;
    margin:30px 0;
}

.pay-btn{
    width:100%;
    text-align:center;
}

</style>

</head>

<body>

<nav>
    <div class="logo">TECHCART</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
    </ul>
</nav>

<div class="checkout-container">

    <h1 class="checkout-title">
        Checkout
    </h1>

    <form>

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" required>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" required>
        </div>

        <div class="total">
            Total: $<?php echo number_format($total,2); ?>
        </div>

        <button type="submit" class="btn pay-btn">
            Place Order
        </button>

    </form>

</div>

</body>
</html>