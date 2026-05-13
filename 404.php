<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 error | Power Zone Gym</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
       <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            background: #0f0f1a;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            padding: 40px;
        }

        .error-code {
            font-size: 150px;
            font-weight: bold;
            color: transparent;
        }
        h2 {
            font-size: 28px;
            margin: 20px 0 10px;
            color: white;
        }

        p {
            color: black;
            margin-bottom: 30px;
            font-size: 16px;
        }

        .btn {
            display: inline-block;
            padding: 12px 35px;
            background: black;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #ffb400;
            transform: scale(1.05);
        }

        .links {
            margin-top: 25px;
        }

        .links a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 14px;
        }

        .links a:hover { text-decoration: underline; color:#ffb400; }
    </style>
</head>
</head>
<body>
<header class="navbar">
    <div class="logo">
        <img src="images/Bodybuilder_Fitness_Club_Black_Logo_1_-removebg-preview.png" alt="power gym logo">
        <h1>POWER ZONE</h1>
    </div>

    <nav class="nav-links">
        <a href="index.html"><i class="fas fa-home"></i> Home</a>
        <a href="about.html"><i class="fas fa-info-circle"></i> About</a>
        <a href="programs.html"><i class="fas fa-dumbbell"></i> Programs</a>
        <a href="plans.html"><i class="fas fa-clipboard-list"></i> plans</a>
        <a href="contact.html"><i class="fas fa-envelope"></i> contact</a>
    </nav>

    <div class="nav-buttons">
        <a href="http://localhost/gym-project/index.php" class="login">Login</a>
        <a href="http://localhost/gym-project/index.php" class="signup">Signin</a>
    </div>
</header>
<div class="container">
    <div class="error-code">404</div>
    <h2>Page Not Found</h2>   
     <a href="index.html" class="btn">Back Home</a>
    <div class="links">
        <a href="index.php">Home</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About</a>
    </div>
</div>
 <footer class="main-footer">
    <diV class="footer-container">
        
    <div class="footer-column about">
    
        <h2 class="footer-logo">Power Zone <span>GYM</span></h2>
        <p>your journey to a stronger Version of yourself starts here . professional equipment and expert trainers .</p>
 
    </div>

    <diV class="footer-column links">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="plans.html">pricing plans</a></li>
            <li><a href="index.html#faq-section">FAQs</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

      </diV>

      <div class="footer-column social">
        <h3>Follow Us</h3>
        <div class="social-icons">
            <a href="#" class="social-link">FB</a>
            <a href="#" class="social-link">IG</a>
            <a href="#" class="social-link">TW</a>
        </div>
      </div>
</div>
<div class="footer-bottom">
    <p>&copy; 2026 powerZonegym Gym. All Rights Reserved</p>
</div>
</footer>
</body>
</html>
