<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

include 'header.php';

<h2>Booking Page (values from get)</h2>

$animal = $_GET["animal"];

echo "<p>Welcome <span style='color:Crimson;'>".$_GET["name"].
"</span></p><p>Your email address is: <span style='color:blue'>". $_GET["email"]."</span><br><br>Your color/animal:</p>".
"<div style='width:300px; background:" . $_GET["color"] . ";'>" . "<img style='margin-left: auto; margin-right: auto; display: block' src='". $animal . ".png'></div>";

echo "<br>";
include 'footer.php';

$name = $_GET["name"];

session_start();
$_SESSION["name"] = $name;
$_SESSION["all_get"] = $_GET;
?>

<button onclick="window.location.href='result_sessionstorage.php'">Weiter</button>
    
</body>
</html>