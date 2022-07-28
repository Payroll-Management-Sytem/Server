<?php
require "config.php";
$query="SELECT `username`, `password` FROM `loginpage` WHERE 1";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result))
{
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>";
}
?>