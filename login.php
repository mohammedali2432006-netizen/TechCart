<?php
session_start();
require_once 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare(
        "SELECT * FROM users WHERE email = ?"
    );

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if($user = $result->fetch_assoc()){

        if(password_verify($password, $user['password'])){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            header("Location: index.php");
            exit();

        }else{
            $message = "Invalid password";
        }

    }else{
        $message = "User not found";
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - TechCart</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>
.auth-box{
    max-width:500px;
    margin:80px auto;
    padding:40px;
    background:#1b1b1b;
    border-radius:20px;
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
</style>

</head>
<body>

<div class="auth-box">

<h1>Login</h1>

<p><?php echo $message; ?></p>

<form method="POST">

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
Login
</button>

</form>

</div>

</body>
</html>
