<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced lecture </title>
</head>
<body>
    <h3>
    lecture on advanced topic where we cover dates,,,,,,..
    </h3>
    
</body>
</html>

<?php



echo "welcome to this lecture <br>";
echo "dates <br>";
//requires the following parameters "y/m/d"

echo "today is ".  date("y/m/d")."<br>";

//to access time use the following 
echo date("h:i:sa");
//incude() in php 
//copies  data ino a file that uses the include statement



// php manupulating files 
//creating,reading,uploading,editting files 
echo "\n<br> reading file  from the  directory ,use readfile('name of the file )<br >";
echo readfile('advance_lecture.php');
//fopen()
echo "<br>fopen() gives more option than readfile()";
//it have 2 parameter which include file_path and open_mode
echo "<br>file opening <br>";
$myfile=fopen('advance_lecture.php','r');
//closing a file after reading we use fclose()
echo "closing opened file <br> ";
fclose($myfile);
//checking the end of a file we use 'feof()

//creating a file 
echo "creating a new form ";
$newFile=fopen('next.php','w');
//writting to a file is done by fwrite() method 
echo "<br>writting to new file ";

$namee="Alexander Njuguna";
fwrite($newFile,$namee);//used in writting content to the file 

fclose($newFile);
//file upload 
 echo "<br> file uploading lecture ";


?>
