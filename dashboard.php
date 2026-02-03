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
<title>Admin Dashboard</title>
<link rel="stylesheet" href="../assets/css/style.css">
<style>
body { display: flex; font-family: Arial, sans-serif; margin:0; }
.sidebar { width: 220px; background-color: #e74c3c; color: #fff; height: 100vh; }
.sidebar h3 { text-align:center; padding:20px 0; }
.sidebar a { display:block; padding:15px 20px; color:white; text-decoration:none; }
.sidebar a:hover { background-color: #c0392b; }
.content { flex:1; padding:20px; background:#f3f6f4; }
.card { background:white; padding:20px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); margin-bottom:20px; }
.btn { padding:10px 15px; border:none; border-radius:5px; cursor:pointer; margin-right:5px; }
.btn-add { background:#2ecc71; color:white; }
.btn-edit { background:#f1c40f; color:white; }
.btn-delete { background:#e74c3c; color:white; }
.btn:hover { opacity:0.9; }
.nav-tabs { display:flex; margin-bottom:10px; }
.nav-tabs button { padding:10px 15px; border:none; cursor:pointer; border-radius:5px 5px 0 0; margin-right:5px; background:#ddd; }
.nav-tabs button.active { background:#e74c3c; color:white; }
.tab-content { background:white; padding:20px; border-radius:0 10px 10px 10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); }
</style>
<script>
function showTab(tabId, btn) {
    const tabs = document.querySelectorAll('.tab-pane');
    tabs.forEach(t => t.style.display='none');
    document.getElementById(tabId).style.display='block';

    document.querySelectorAll('.nav-tabs button').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
}
</script>
</head>
<body>
<div class="sidebar">
    <h3>Admin Menu</h3>
    <a href="dashboard.php">Dashboard</a>
    <a href="#" onclick="showTab('users', this)">Manage Users</a>
    <a href="#" onclick="showTab('donations', this)">Manage Donations</a>
    <a href="#" onclick="showTab('reports', this)">Reports</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
</div>

<div class="content">
    <h2>Welcome, <?= htmlspecialchars($_SESSION["admin"]) ?>!</h2>

    <div class="tab-content">
        <div id="users" class="tab-pane">
            <h3>Users</h3>
            <button class="btn btn-add">Add User</button>
            <button class="btn btn-edit">Edit User</button>
            <button class="btn btn-delete">Delete User</button>
            <p>List of users here...</p>
        </div>

        <div id="donations" class="tab-pane" style="display:none;">
            <h3>Donations</h3>
            <button class="btn btn-add">Add Donation</button>
            <button class="btn btn-edit">Edit Donation</button>
            <button class="btn btn-delete">Delete Donation</button>
            <p>List of donations here...</p>
        </div>

        <div id="reports" class="tab-pane" style="display:none;">
            <h3>Reports</h3>
            <p>Report charts or tables go here...</p>
        </div>
    </div>
</div>

<script>
showTab('users', document.querySelector('.nav-tabs button')); // default tab
</script>
</body>
</html>