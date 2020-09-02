<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 

<!DOCTYPE html>
<html>
<head>
    <title>Where's My Spot?</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="download.jpg">
            </div>
            <ul>
                <li><a href="welcome.php">Home</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="RentSpace.php">Rent Space</a></li>
                <li><a href="#">About</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="title">
            <h1>Where's My Spot?</h1>
        </div>
        <div class="button">
            <a href="Cars.html" class="btn">CARS</a>
            <a href="Park.html" class="btn">BIKES</a>
            
        </div>
    </header>
</body>
</html>