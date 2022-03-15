<?php
/* global style adjustments and header*/
echo "<style>body {margin-left: 48px; width: 300px}</style>";



$menuItems = array (
    array("home.html", "Home"),
    array("gallery.php", "Gallery"),
    array("form.php", "Booking"),
    array("login.html", "Login")
);

echo "<h1 style='margin-top:16px; margin-bottom: 8px'>My Website</h1>";

$i=1;

foreach($menuItems as $item) {

    if($i < count($menuItems)) $separator = " | "; else $separator = "";

    echo "<a href=$item[0] alt=$item[1]>$item[1]</a>$separator";

    $i++;    
}

echo "<br><hr style='margin-top: 8px'>";

?>