<?php
session_start();
require_once 'db.php';

$cart = $_SESSION['cart'] ?? [];
$total = 0;

foreach ($cart as $item) {
    $total += $item['price'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("
        INSERT INTO orders
        (customer_name, customer_email, customer_address, total)
        VALUES (?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "sssd",
        $name,
        $email,
        $address,
        $total
    );

    $stmt->execute();

    $_SESSION['cart'] = [];

    $success = true;
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

.success-message{
    background:#28a745;
    color:white;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
    text-align:center;
    font-weight:bold;
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

    <?php if(isset($success)): ?>
        <div class="success-message">
            Order placed successfully!
        </div>
    <?php endif; ?>

    <form method="POST">

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" required>
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