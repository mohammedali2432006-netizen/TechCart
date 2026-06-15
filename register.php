<?php
require_once 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare(
        "INSERT INTO users (name,email,password)
         VALUES (?,?,?)"
    );

    $stmt->bind_param(
        "sss",
        $name,
        $email,
        $password
    );

    if($stmt->execute()){
        $message = "Registration successful!";
    }else{
        $message = "Email already exists.";
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - TechCart</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>

.auth-box{
    max-width:500px;
    margin:80px auto;
    padding:40px;
    background:#1b1b1b;
    border-radius:20px;
}

.auth-box h1{
    text-align:center;
    margin-bottom:30px;
}

.auth-box input{
    width:100%;
    padding:15px;
    margin-bottom:15px;
    border:none;
    border-radius:10px;
    background:#2a2a2a;
    color:white;
}

.message{
    text-align:center;
    margin-bottom:15px;
}

</style>

</head>

<body>

<div class="auth-box">

```
<h1>Create Account</h1>

<div class="message">
    <?php echo $message; ?>
</div>

<form method="POST">

    <input
    type="text"
    name="name"
    placeholder="Full Name"
    required>

    <input
    type="email"
    name="email"
    placeholder="Email"
    required>

    <input
    type="password"
    name="password"
    placeholder="Password"
    required>

    <button class="btn" type="submit">
        Register
    </button>

</form>
```

</div>

</body>
</html>
