<?php
// HopeReach Application Home Page (Company-Focused)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HopeReach | Home</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f3f6f4;
        }

   
        .topbar {
            background-color: #2e7d32;
            color: white;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

   
        .hero {
            padding: 60px 30px;
            background: linear-gradient(135deg, #2e7d32, #66bb6a);
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
        }

        .hero p {
            font-size: 18px;
            margin: 20px 0;
        }

        .btn {
            background-color: #fbc02d;
            color: black;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        
        .section {
            padding: 50px 30px;
            background: white;
            margin: 25px;
            border-radius: 12px;
        }

        .section h2 {
            color: #2e7d32;
            margin-bottom: 15px;
        }

      
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .feature {
            background: #e8f5e9;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
        }

        
        footer {
            background-color: #1b5e20;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>


<div class="topbar">
    <div class="logo">HopeReach</div>
    <div class="nav">
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Programs</a>
        <a href="#">Donate</a>
        <a href="#">Contact</a>
    </div>
</div>


<div class="hero">
    <h1>Connecting Help to Where It’s Needed Most</h1>
    <p>
        HopeReach is a digital platform that makes giving simple,
        transparent, and impactful.
    </p>
    <a href="donate.php" class="btn">Get Started</a>
</div>


<div class="section">
    <h2>About HopeReach</h2>
    <p>
        HopeReach is a social-impact company focused on connecting donors,
        volunteers, and communities through technology. Our platform enables
        people to contribute to meaningful causes and support access to
        essential resources.
    </p>
</div>

<div class="section">
    <h2>What We Do</h2>

    <div class="features">
        <div class="feature">
            💳<br><strong>Digital Donations</strong><br>
            Secure and easy giving anytime, anywhere
        </div>

        <div class="feature">
            🤝<br><strong>Community Support</strong><br>
            Helping communities access essential resources
        </div>

        <div class="feature">
            📊<br><strong>Transparency</strong><br>
            Clear tracking of donations and impact
        </div>
    </div>
</div>


<div class="section">
    <h2>Our Solution</h2>
    <p>
        HopeReach provides a centralized platform where individuals and
        organizations can support communities efficiently. By combining
        technology with compassion, we ensure that help reaches the right
        people at the right time.
    </p>
    <a href="donate.php" class="btn">Support a Cause</a>
</div>


<footer>
    <p><strong>HopeReach</strong></p>
    <p>Group: Hope Crew | School Project © 2026</p>
</footer>

</body>
</html>