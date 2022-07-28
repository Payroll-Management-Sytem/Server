<?php
require "config.php";
$query="SELECT `uid`,`username`, `password` FROM `loginpage` WHERE username=\"".$_POST['fname']."\"";
// $query="SELECT `uid`,`username`, `password` FROM `loginpage` WHERE username=\"tominjk2022@gmail.com\"";
$result=mysqli_query($conn,$query);
if ($row=mysqli_fetch_array($result)) 
{   
    if($row[2]==$_POST['pass']){
        echo "success<br>".$row[0];
    }else{
        echo "failed";
    }
}
?>