<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
$name = $_SESSION["all_get"]["name"];
$email = $_SESSION["all_get"]["email"];
$animal= $_SESSION["all_get"]["animal"];
$color = $_SESSION["all_get"]["color"];
include 'header.php';

echo "<h2>Booking Page (values from session)</h2>";

echo "<p>Welcome <span style='color:Crimson;'>$name</span></p><p>Your email address is: <span style='color:blue'>$email</span><br><br>Das gewählte Tier:</p>
<div style='width: 300px; background:$color;'><img style='margin-left: auto; margin-right: auto; display: block' src='$animal.png'></div>";

echo "<br>";
include 'footer.php';
?>
    
</body>
</html>