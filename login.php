<?php
session_start();


$admin_username = "admin";
$admin_password = "1234"; 

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION["admin"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link rel="stylesheet" href="../assets/css/style.css">
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f3f6f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    text-align: center;
}
.login-container img { width: 100px; margin-bottom: 15px; }
input, button { width: 50%; padding: 10px; margin-bottom: 15px; border-radius: 5px; }
button { background-color: #e74c3c; color: white; border: none; cursor: pointer; }
button:hover { opacity: 0.9; }
.error { color: red; }
</style>
</head>
<body>
<div class="login-container">
    <img src="../assets/img/logo.png" alt="Logo">
    <h2>Admin Login</h2>

    <?php if ($message): ?>
        <p class="error"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>