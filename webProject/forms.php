<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form field 
</title>
<link rel="stylesheet" href="style.css">
</head>
<body >
<?php
  /*  
    if ($_SERVER["REQUEST_METHOD"] == "POST" && 
    empty($firstnameErr) && 
    empty($lastnameErr) && 
    empty($emailErr) && 
    empty($phonenumberErr) && 
    empty($passwordErr) && 
    empty($genderErr)) {
    echo "<h2>You have entered the following details:</h2>";
    echo "<b>Firstname:</b> $firstname<br>";
    echo "<b>Lastname:</b> $lastname<br>";
    echo "<b>Phone Number:</b> $phonenumber<br>";
    echo "<b>Email:</b> $email<br>";
    echo "<b>Gender:</b> $gender<br>";
}
*/ 
?>


<?php

// htmlspecialChars() convert special characters to html entities 
$firstnameErr=$lastnameErr=$emailErr=$genderErr=$passwordErr=$phonenumberErr="";
$firstname=$lastname=$email=$gender=$password=$phonenumber="";
function test_input($data){


    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    
    
    if (empty($_POST["firstname"])) {
        $firstnameErr = "firstName is required";
      } 
    else{

        $firstname=test_input($_POST["firstname"]);
      }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "lastname is required";
      }  
      elseif (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
       $nameErr = "Only letters and white space allowed";
      }
    else{
        $lastname=test_input($_POST["lastname"]);
      }
   
     if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      }
    else {
        $email=test_input($_POST["email"]);
      }
      
    if (empty($_POST["phonenumber"])) {
        $phonenumberErr = "phone number is missing ";
      }
    else {
        $phonenumber=test_input($_POST["phonenumber"]);
      }
    if (empty($_POST["password"])) {
        $passwordErr = "password is required";
      }
    else {
        $password=test_input($_POST["password"]);
      }
    
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } 
    else {
        $gender=test_input($_POST["gender"]);
      }
    
}





?>
    <h2>SIGNUP</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>" method="post">

<label for="name">Firstname :</label>
<input type="text" name="firstname">
<span class="error">* <?php echo $firstnameErr;?></span><br><br>
<label for="name">Lastname:</label>
<input type="text" name="lastname">
<span class="error">* <?php echo $lastnameErr;?></span><br><br>
<label for="phonenumber">phoneNumber :</label>
<input type="number" name="phonenumber">
<span class="error">* <?php echo $phonenumberErr;?></span><br><br>
<br><br>
<label for="email">Email :</label>
<input type="email" name="email">
<span class="error">* <?php echo $emailErr;?></span><br><br>
<br>
<br>
<label for="password">password : </label>
<input type="password" name="password">
<span class="error">* <?php echo $passwordErr;?></span><br><br>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span><br><br>
<br>
<input type="submit"  id="submit"value="submit" >
</form>


<?php 
//establishing a connection
echo " <br> openning a connection  with  mysql <br>";
$servername="localhost";
$username="root";
$serverPassword="alex";
$dbname="School";

//creatinning a connection
$conn = new mysqli($servername,$username,$serverPassword,$dbname);

//check of a connection
if (!$conn) {
 die("connection error ,please try again".$conn->connect_error()."");


}

// creating mysql database
//created using CREATE DATABASE DBNAME Like this

$dbExistence="SHOW DATABASES LIKE '$dbname' ";
$dbResult=$conn->query($dbExistence);
$dblocal="USE School";
if ($dbResult === false) {
  die("Error checking if database exists: " . $conn->error);
}
if ($dbResult->num_rows==0) {
  $dbname="CREATE DATABASE School";
  if ($conn->query($dbname)===TRUE) {

 echo "database created successfuly <br>";

  }
  else {
  echo "error when creating database ".$conn->error;
  }
 
} else {
  if ($conn->select_db($dbname)) {
    echo "Database '$dbname' selected successfully <br>";
} else {
    die("Error selecting the database: " . $conn->error);
}
  
}


//

$tableExistence = "SHOW TABLES LIKE 'mysignup'";
    $tableResult = $conn->query($tableExistence);
if ($tableResult === false) {
      die("Error checking if table exists: " . $conn->error);
    }
if ($tableResult === false) {
  die("Error checking if table exists: " . $conn->error);
}
if ($tableResult->num_rows == 0) {
  $signUp="CREATE TABLE Mysignup(
      id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      firstname VARCHAR(30) NOT NULL,
      lastname VARCHAR(30) NOT NULL,
      phonenumber VARCHAR(13) NOT NULL,
      email VARCHAR(20) NOT NULL,
      mypassword VARCHAR(30) NOT NULL,
      gender VARCHAR(5) NOT NULL
      
      )";
    
    
    
    if ($conn->query($signUp)===TRUE) {
  
      echo "signup table have been created successfully <br>";
    
    } else {
      echo "error while creating  signup table".$conn->error."";
    
    }
    //
    
    //
  }
  else {
    $selectQuery = "SELECT * FROM Mysignup";
$result = $conn->query($selectQuery);

if ($result === false) {
  die("Error querying the table: " . $conn->error);
}
  }
  
//creating db tables






//mysql insert data 
//rules followed :sql query,string values  must be quoted in php 
//numeric values,null must not be quoted 
//INSERT INTO -used to add data 

$insertData="INSERT INTO `Mysignup`(
firstname,lastname,phonenumber,email,mypassword,gender
)
VALUES ('$firstname','$lastname','$phonenumber','$email','$password','$gender')";

if ($conn->query($insertData)===TRUE) {
  //checking last id allocated 
  $last_id=$conn->insert_id;
  $id_query="SELECT id FROM Mysignup ORDER BY id DESC LIMIT 1";
  $id_result=$conn->query($id_query);
  if ($id_result->num_rows>0){
    

    if(['id']!=$last_id){
      echo "id mismatch";
     }
  }else {
    echo " <br>no records";
  }}
  
 
   ?>";
   



<?php

if (isset($_POST['gender'])) {
  $gender = $conn->real_escape_string($_POST['gender']);
} else {
  die("Error: Gender field is not set.");
}
//$conn->close();

?>

<?php
$firstname = $conn->real_escape_string($_POST['firstname']);
$lastname = $conn->real_escape_string($_POST['lastname']);
$phonenumber = $conn->real_escape_string($_POST['phonenumber']);
$email = $conn->real_escape_string($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashing the password for security
$gender = $conn->real_escape_string($_POST['gender']);


//checking  gender value



$alter="ALTER TABLE Mysignup MODIFY COLUMN mypassword VARCHAR(255)";


if ($conn->query($alter) === TRUE) {
  echo "Column 'mypassword' modified successfully to VARCHAR(255).";
} else {
  die("Error modifying 'mypassword' column: " . $conn->error);
}

?>
</body>
</html>

