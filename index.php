
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myINDEX file page</title>
    <a href="style.css"></a>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="name">FirstName</label>
        <input type="text" name="fname" required />
        <label for="name">LastName</label>
        <input type="text" name="lname" required />
        <label for="">Password</label>
        <input type="password" name="password" required>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
echo "Your Firstname is: " . $fname . "  second name.$lname and password is: " . $password;
 $servername = "localhost";
 $username = "root";
 $password1 = "alex";

 $conn = mysqli_connect($servername, $username, $password1);

 if (!$conn){
    die("Connection failed." . mysqli_connect_error());
 }
 echo "Connected successfully";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Form with Scroll</title>
    <!-- Link the CSS file -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
// PHP Code for form processing can be placed here
?>

<!-- Form with scroll and center alignment -->
<form action="your_php_file.php" method="post">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname" required>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname" required>

    <label for="phonenumber">Phone Number:</label>
    <input type="number" name="phonenumber" id="phonenumber" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="female" id="female">Female
    <input type="radio" name="gender" value="male" id="male">Male
    <input type="radio" name="gender" value="other" id="other">Other

    <input type="submit" value="Submit">
</form>

</body>
</html>
