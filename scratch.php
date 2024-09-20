<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basics 

    </title>
</head>
<body>
    hello

    <form method="post" action="scratch.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
</body>
</html>
<?php
// to know the type of data use var_dump()
$x=10;
echo $x;
var_dump($x);
"<br>";
//function are written using function key word 
function index(){
    echo"hello there this is the function of php code ";
}
index();

//echo phpversion()
// arrrays in php
$cars=array("vilvo","kenya","uganda","tz");
// to output array use the print_r() method
echo " <>the following is a  list of arrays <br>";
print_r($cars);
// creating a class and an object
 class University{
    public $course;
    public $department;
    //implement  _construct () method 
    public function _construct($course,$department){
        $this->course=$course;
        $this->department=$department;


    }
    public function studies(){
        return "i'm doing ".$this->course."and ".$this->department."!!";
    }
 }
 //creating an object we have
 $mycourse=new University("computer science ","SCI");
 echo" this is the object of the university <br> \n";
 print_r($mycourse);


//type casting 
//done by passing the type before 

$x=10;
$x=(string)$x;
echo "casting ha been done ",$x;

//string length is done through a function srtrlen()
"<br>";
echo "<br>determing lengh  of string <br>";
echo strlen("myname is Alex ");
// to convert string to upper case ,use  strtoupper()
$name="joe doe ";
echo "<br>name $name <br>";
echo strtoupper($name);
// to convert to an array use  explode() method
//it has 2 arguments one been 'separator' and the other one 'variable'
echo " <br>convert a string into an array is as follows  <br>";

$names=explode(",",$name);
print_r($names);
//to concatenate a string with other we use . operator
$x.$name;
//slicing
//we use substr() function where you specify the start index and the number of characters you want to return

echo "slicing lecture <br>";
echo substr($name,3,6);
// creating a constant we use  define () function
define("FIRSTNAME","Alex");
echo FIRSTNAME;
//for each loop 
$colors=array("red","blue","yellow","green");
foreach($colors as $x)
{
    echo"$x <br>";
}
//function creation  start with function key word 
function myFunction(){
    echo "my functions in  this program  ";

}
// to call a function  
myFunction();



$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
  // i will start discussing  about superglobal variable  and their tasks 
  // they include $ GLOBALS,$_SERVER,$_REQUEST,$_POST,$_GET,
  //$_FILES,$_ENV,$_COOKIE,$_SESSION
  //$ GLOBALS- array that contains all global variable
  $x = 75;
  
function globals() {
    echo "here is demonstration of the globals <br>";
  echo $GLOBALS['x'];
  //you can also declare this way
  echo "also done through <br>";
  global $x;
  echo $x;
}

globals();
// $_server
//hold information on headers,paths,and script location 
"<br>";
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['SCRIPT_NAME'];

//$_REQUEST[]
//contains submitted from data and all cookie data
// array containing data from $_GET,$_POST  and $_COOKIE
//you can access data with $_REQUEST keyword followed by the name of the form field ,or cookie 

$named=$_REQUEST['fname'];
echo "demonstration of REQUEST method <br> \n name: ";
echo $named;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $named= htmlspecialchars($_REQUEST['fname']);
    if (empty($named)) {
      echo "Name is empty";
    } else {
      echo $named;
    }
  }
//$_POST  
// USUALY  data SUBMITTED  FROM HTML form 
//contains an array of variables recieved via HTTP POST method
//operates in either html forms or javascript http requests
echo "<form method='POST' action='scratch.php'>
name: <input type='text' name='password'><br>
<input type='submit'>

</form";




//$_GET
//request data from a query string 
//contain an array of variables via the HTTP GET method 
//done either query string in the URL or HTML forms 



?>