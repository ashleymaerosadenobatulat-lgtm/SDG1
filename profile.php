<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Profile</title>
<link rel="stylesheet" href="../assets/css/style.css">
<style>
body { font-family: Arial, sans-serif; background:#f3f6f4; padding:20px; }
.card { background:white; padding:20px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); max-width:400px; margin:auto; }
.card img { width:100px; border-radius:50%; display:block; margin:auto 0 10px; }
.btn { padding:10px 15px; border:none; border-radius:5px; background:#e74c3c; color:white; cursor:pointer; display:block; margin:auto; }
.btn:hover { opacity:0.9; }
</style>
</head>
<body>
<div class="card">
    <img src="../assets/img/logo.png" alt="Profile">
    <h3 class="text-center"><?= htmlspecialchars($_SESSION["admin"]) ?></h3>
    <p class="text-center">admin@example.com</p>
    <button class="btn">Edit Profile</button>
</div>
</body>
</html>