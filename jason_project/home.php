<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Jason Ladies Hostel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            text-align: center;
        }
        header {
            background-color: #002366;
            padding: 20px;
            color: white;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            background-color: #002366;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            display: inline;
            padding: 15px 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            transition: all 0.3s;
        }
        nav ul li a:hover {
            background-color: #ffcc00;
            color: black;
            box-shadow: 0px 0px 10px #ffcc00;
        }
        .container {
            padding: 50px;
        }
        .footer {
            background-color: #002366;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Jason Ladies Hostel</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Welcome to Jason Ladies Hostel</h2>
        <p>Your comfort and safety is our priority.</p>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Jason Ladies Hostel. All rights reserved.</p>
    </footer>
</body>
</html>