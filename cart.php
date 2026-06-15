<?php
session_start();

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

<style>

.cart-container{
    max-width:1200px;
    margin:50px auto;
    padding:20px;
}

.cart-title{
    text-align:center;
    font-size:50px;
    margin-bottom:40px;
}

.cart-item{
    background:rgba(20,20,20,.9);
    border:1px solid rgba(255,255,255,.1);
    border-radius:20px;
    padding:25px;
    margin-bottom:20px;

    display:flex;
    justify-content:space-between;
    align-items:center;
}

.product-name{
    font-size:24px;
    font-weight:bold;
}

.product-price{
    font-size:22px;
    color:#ddd;
    margin-top:8px;
}

.remove-btn{
    background:#8B0000;
    color:white;
    text-decoration:none;
    padding:10px 20px;
    border-radius:10px;
    font-weight:bold;
    transition:.3s;
}

.remove-btn:hover{
    background:#b30000;
}

.total-box{
    margin-top:30px;
    text-align:right;
}

.total-box h2{
    font-size:36px;
}

.checkout-btn{
    margin-top:20px;
    display:inline-block;
}

.empty-cart{
    text-align:center;
    font-size:24px;
    margin-top:50px;
}

.cart-count{
    text-align:center;
    color:#bbb;
    margin-bottom:30px;
    font-size:18px;
}

</style>

</head>

<body>

<nav>
    <div class="logo">TECHCART</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        
    </ul>
</nav>

<div class="cart-container">

    <h1 class="cart-title">
        Shopping Cart
    </h1>

    <div class="cart-count">
        Items in cart: <?php echo count($cart); ?>
    </div>

    <?php if(empty($cart)): ?>

        <div class="empty-cart">
            Your cart is empty.
        </div>

    <?php else: ?>

        <?php foreach($cart as $index => $item): ?>

            <?php $total += $item['price']; ?>

            <div class="cart-item">

                <div>

                    <div class="product-name">
                        <?php echo htmlspecialchars($item['name']); ?>
                    </div>

                    <div class="product-price">
                        $<?php echo number_format($item['price'],2); ?>
                    </div>

                </div>

                <a
                    href="remove_from_cart.php?index=<?php echo $index; ?>"
                    class="remove-btn"
                >
                    Remove
                </a>

            </div>

        <?php endforeach; ?>

        <div class="total-box">

            <h2>
                Total: $<?php echo number_format($total,2); ?>
            </h2>

            <a href="checkout.php" class="btn checkout-btn">
                Proceed To Checkout
            </a>

        </div>

    <?php endif; ?>

</div>

</body>
</html>