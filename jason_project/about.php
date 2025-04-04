<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Jason Ladies Hostel</title>
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
        .facility-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .facility-container img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            transition: 0.3s;
            border-radius: 10px;
        }
        .facility-container img:hover {
            box-shadow: 0px 0px 15px gold;
            transform: scale(1.1);
        }
        .feature-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .feature-column {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .feature-box {
            width: 250px;
            padding: 15px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
            transition: 0.3s;
            font-size: 18px;
            font-weight: bold;
        }
        .feature-box:hover {
            box-shadow: 0px 0px 20px gold;
            transform: scale(1.1);
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
        <h2>About Us</h2>
        <p>Jason Ladies Hostel provides the best facilities for students and working professionals, ensuring comfort and security.</p>
        <h2>Our Facilities</h2>
        <div class="facility-container">
            <img src="washingmachine.png" alt="Washing Machine">
            <img src="wifi.png" alt="Free WiFi">
            <img src="lift.png" alt="Lift Service">
            <img src="auditorium.png" alt="Mini Auditorium">
        </div>
        <h2>We Also Have These Facilities</h2>
        <div class="feature-container">
            <!-- First Column (4 features) -->
            <div class="feature-column">
                <div class="feature-box">Prominent Location</div>
                <div class="feature-box">Fully Furnished A/c & Non A/c Rooms</div>
                <div class="feature-box">Free Wi-Fi</div>
                <div class="feature-box">Intercom</div>
            </div>
            <!-- Second Column (4 features) -->
            <div class="feature-column">
                <div class="feature-box">Hygienic Food - Veg/Non Veg</div>
                <div class="feature-box">Lift Facility</div>
                <div class="feature-box">Mini Auditorium</div>
                <div class="feature-box">Indoor Games</div>
            </div>
            <!-- Third Column (3 features) -->
            <div class="feature-column">
                <div class="feature-box">Beauty Parlour</div>
                <div class="feature-box">24/7 Security</div>
                <div class="feature-box">Under CCTV Surveillance</div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Jason Ladies Hostel. All rights reserved.</p>
    </footer>
</body>
</html>