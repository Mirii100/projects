<?php

echo "<h2>lecture</h2> <br>";
echo "<input type='file' name='filetoupload' id='file'>
<br>
<input type='submit' value='submit1' name='submit'>";

echo "<br><br> cookie lecture  <br>";

// Creating a cookie with a valid name (no space in the name)
setcookie('first_cookie', 'james bond');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php 
    if(!isset($_COOKIE['first_cookie'])) {
        echo "Cookie is not set!";
    } else {
        echo "Cookie is set!";
        echo "Value is: " . $_COOKIE['first_cookie'];
    }
    ?>
</body>
</html>
