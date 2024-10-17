<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>php classes lecture on w3schools </h2>
<?php
//there following is a lecture on classes ,objects 

class  Student{

    public $name;
    public $regno;

    function set_name($name){
        $this->name=$name;

    }
    function set_regno($regno){
        $this->regno=$regno;

    }
     function get_name(){
        return $this->name;

     }
     function get_regno(){
        return $this->regno;

     }
}
//objects are created using  new keyword 

$firstStudent=new Student();

//calling  an object we say 
echo "first name : \t ";
$firstStudent->set_name("Alex");
//to print we say 
 echo $firstStudent->get_name();

 echo "<br>";
 
 $firstStudent->set_regno("ct201/109");

 echo "regno :";
 echo $firstStudent->get_regno();
//creating a constructor we  use 2 underscore like this __

 function __construct($name,$regno){
    $this->name=$name;
    $this->regno=$regno;
 }
 // accesss modifiers 
 //public ,private, protected 
 //inheritance ,done by use of extends keyword 
 
 class dept extends Student{
    public function message(){
        echo "<br>this is the child class inherited from student class ";

    }
//add to string method to convert to string 

    public function __toString() {
        return "Student Name: " . $this->name . ", Reg No: " . $this->regno;
    }
 }
 echo $inherit=new dept("mike","ct");
 echo $inherit->message();
//resolution operators  ::

//polymorphism in php is sometimes called interaces 
//declared using interface 
//implemented using implements key word 



interface Animal {
    public function makeSound();
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo "Meow";
    }
  }
  
  $animal = new Cat();
  $animal->makeSound();

  //traits- used to  declare methods which are used in multiple classes
  //to use trait use 'use' key word 

trait TraitName {
  // some code...
  public function msg1() {
    echo "OOP is fun! ";
  }
}

class MyClass {
    use TraitName;
  }

 trait Mynams{
  public function msg1() {
    echo " <br>OOP is fun! ";
  }
 }
 
 

 class names{
use Mynams;
  
 
  
}
 echo"<br>";
$obj=new names();
$obj->msg1();

// static method are declared using :: and static key word 
class ClassName {
  public static function staticMethod() {
    echo "Hello World!";
  }
}

//php namespaces -Namespaces are qualifiers that solve two different problems:
//A namespace declaration must be the first thing in the PHP file.







?>
</body>
</html>
