<?php
header('Access-Control-Allow-Origin: http://127.0.0.1:5500');
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