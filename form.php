<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <style>

        body {
            margin: 0;
        }

        hr {
            margin: 0;
        }

    </style>
</head>
<body>

<?php
include 'header.php';
?>

<h2>Booking Page (send values with get)</h2>

<form action="result.php" method="get">

    <label for="animal">Wähle ein Tier</label>
    <select id="animal" name="animal">
        <option value="dog">Hund</option>
        <option value="cat">Katze</option>
    </select><br>

    <label for="animal">Farbe Wählen</label>
    <select id="color" name="color">
        <option value="red">Rot</option>
        <option value="blue">Blau</option>
        <option value="yellow">Gelb</option>
        <option value="green">Grün</option>
    </select><br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>

    <button>Absenden</button><br><br>

</form>

<?php
include 'footer.php';
?>
    
</body>
</html>