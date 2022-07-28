<?php
$name = $_POST['fname'];
$pass = $_POST['pass'];
// $name="hi";
// $pass="hello";
require "config.php";
$query= "INSERT INTO `loginpage`(`username`, `password`) VALUES ('".$name."','".$pass."')";
if ($conn->query($query) === TRUE) 
{
 echo "success" ;
} 
else 
{
 echo "Error:" . $conn->error;
}
?>