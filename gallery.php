<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <style>
        hr {
            margin:0;
        }

        p {
            margin:0;
            padding: 0;
            font-size: medium;
            text-align: center;
        }

        h1 {
            text-align: center;
        }

    <

    </style>
</head>
<body>

<h1>Gallery</h1>

<form action="gallery.php" method="GET" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php

/* upload file */

$target_dir = "images";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_GET["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

/* delete image */

if (isset($_GET['submit'])) 
{
$photoname = $_GET['photoname'];

if (!unlink("images/$photoname"))
  {
    echo ("Konnte nicht gelöscht werden: $photoname");
  }
else
  {
    echo ("Erfolgreich gelöscht: $photoname");
  }
}

/* generate image list */


function gallery() {

    $dir = "images";


    
    if (count(glob("images/*")) === 0 ) {Echo "<p>Es sind keine Bilder vorhanden.</p>";} else {
      
        if (is_dir($dir)){
            if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
                
                if (is_readable("images/$file") && $file != '.' && $file != '..'){
                listImage($file);
                }
            }
            closedir($dh);
            }
        }
    }

}

function listImage($file){

    $filename = pathinfo($file, PATHINFO_FILENAME);

    echo "<div style='background: WhiteSmoke; width:233px; margin:auto; text-align: center'><p style='margin:0'>$filename<p><hr>
    <img width='233px' src=images/$file alt=$file>
    <hr><form method='GET' action='gallery.php'>
    <input type='hidden' name='photoname' value=$file>
    <input style='margin:0' type='submit' name='submit' value='Delete'></form></div><br>";    
}

gallery();

//$_GET = array();


echo "<br>";
include 'footer.php';
?>
    
</body>
</html>