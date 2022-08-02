<?php
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Origin: https://dinero-dbms.herokuapp.com');
$serverName = "sql3.freemysqlhosting.net";
$username = "sql3509293";
$password = "FqLP8e3wKL";
$dbname = "sql3509293";

$conn = new mysqli($serverName, $username, $password, $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>