//login.php
<?php
session_start();
$usersFile = "users.txt";



$users = getUsers($usersFile);
$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $message = "Please enter both username and password.";
        $messageType = "error";
    }
    elseif (!isValidPassword($password)) {
        $message = "Password format is invalid.";
        $messageType = "error";
    }
    elseif (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $users[$username]['name'];
        header("Location: profile.php");
        exit;
    }
    else {
        $message = "Invalid username or password.";
        $messageType = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    width: 350px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}
input, button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
}
button {
    background-color: #007bff;
    color: white;
    border: none;
}
.error { color: red; }
</style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <?php if ($message): ?>
        <p class="<?= $messageType ?>"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <p>Don't have an account? <a href="register.php">Register here</a></p>
</div>

</body>
</html>