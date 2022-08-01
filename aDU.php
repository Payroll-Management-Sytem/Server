<?php
require 'config.php';
    $_POST['uid']="534681";
    // $sql = "SELECT `uid`, `username`, `empid`, `empname`, `age`, `dob`, `gender`, `dateofjoining`, `designation`, `office` FROM `employeedetails` where uid=\"534681\"";
    $sql = "SELECT `uid`, `username`, `empid`, `empname`, `age`, `dob`, `gender`, `dateofjoining`, `designation`, `office` FROM `employeedetails` where uid=\"".$_POST['uid']."\"";
    $string="";
    $result=mysqli_query($conn,$sql);
    if ($row=mysqli_fetch_array($result)){
        foreach (array_unique($row) as $value) {
            $string=$string."$value<>";
        }
    }
    $sql = "select `password` from `loginpage` where uid=\"".$_POST['uid']."\"";
    $result=mysqli_query($conn,$sql);
    if ($row=mysqli_fetch_array($result)){
        foreach (array_unique($row) as $value) {
            $string=$string."$value<>";
        }
    }
    echo $string;
?>