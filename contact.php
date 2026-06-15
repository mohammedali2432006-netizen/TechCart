<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - TechCart</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>

.contact-container{
    max-width:900px;
    margin:60px auto;
    padding:30px;
}

.contact-card{
    background:rgba(20,20,20,.9);
    border:1px solid rgba(255,255,255,.1);
    border-radius:25px;
    padding:40px;
}

.contact-card h1{
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

.form-group input,
.form-group textarea{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#2a2a2a;
    color:white;
}

.form-group textarea{
    min-height:150px;
    resize:none;
}

.contact-info{
    margin-top:30px;
    text-align:center;
    color:#cccccc;
}

</style>

</head>
<body>

<nav>
    <div class="logo">TECHCART</div>

```
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="cart.php">Cart</a></li>
</ul>
```

</nav>

<div class="contact-container">

```
<div class="contact-card">

    <h1>Contact Us</h1>

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
            <label>Message</label>
            <textarea required></textarea>
        </div>

        <button type="submit" class="btn">
            Send Message
        </button>

    </form>

    <div class="contact-info">
        <p>Email: support@techcart.com</p>
        <p>Phone: +250 700 000 000</p>
    </div>

</div>
```

</div>

</body>
</html>
