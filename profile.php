<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';
    // $sql = "SELECT `uid`, `username`, `empid`, `empname`, `age`, `dob`, `gender`, `dateofjoining`, `designation`, `office` FROM `employeedetails` where uid=\"534681\"";
    $sql = "SELECT `uid`, `username`, `empid`, `empname`, `age`, `dob`, `gender`, `dateofjoining`, `designation`, `office` FROM `employeedetails` where uid=\"".$_POST['uid']."\"";
    $string="";
    $result=mysqli_query($conn,$sql);
    if ($row=mysqli_fetch_array($result)){
        foreach (array_unique($row) as $value) {
            $string=$string."$value<>";
        }
        echo $string;
    }
}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>
