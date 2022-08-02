<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';
    $sql = "SELECT `uid`, `empname` FROM `employeedetails` order by empname";
    $string="";
    $result=mysqli_query($conn,$sql);
    if ($row=mysqli_fetch_array($result)){
        do{
            $string=$string."$row[0]<>$row[1][o]";
        }while($row=mysqli_fetch_array($result));
        echo $string;
    }
}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>