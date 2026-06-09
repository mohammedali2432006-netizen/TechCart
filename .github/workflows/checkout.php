<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Checkout</title>

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

    <h2>Checkout</h2>

    <div
    style="
    max-width:600px;
    margin:auto;
    "
    >

        <form>

            <input
            type="text"
            placeholder="Full Name"
            style="
            width:100%;
            padding:15px;
            margin-bottom:15px;
            "
            >

            <input
            type="email"
            placeholder="Email Address"
            style="
            width:100%;
            padding:15px;
            margin-bottom:15px;
            "
            >

            <input
            type="text"
            placeholder="Phone Number"
            style="
            width:100%;
            padding:15px;
            margin-bottom:15px;
            "
            >

            <textarea
            placeholder="Shipping Address"
            style="
            width:100%;
            height:150px;
            padding:15px;
            margin-bottom:20px;
            "
            ></textarea>

            <button
            type="submit"
            class="btn"
            >
                Place Order
            </button>

        </form>

    </div>

</section>

</body>
</html>