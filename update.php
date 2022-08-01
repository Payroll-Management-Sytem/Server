<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';

        
        $query = "update `loginpage` set 
        `uid` = '".$_POST['uid']."',
        `username` = '".$_POST['username']."',
        `password` = '".$_POST['pass']."'
        where `uid` = '".$_POST['old']."';";
    if ($conn->query($query) === TRUE) { 
        $query1 = "update `employeedetails` set 
        `empid` = '" . $_POST['empid'] ."',
        `empname`='".$_POST['empname']."',
        `age` = '".$_POST['age']."',
        `dob` = '".$_POST['dob']."',
        `gender` = '".$_POST['gender']."',
        `dateofjoining` = '".$_POST['doj']."',
        `designation` = '".$_POST['desig']."',
        `office`='".$_POST['ofc']."'
        where `uid` ='".$_POST['uid']."';";
        if ($conn->query($query1) === TRUE) {
            $query2="update `salarydetails` set
            `empname` = '".$_POST['empname']."' where `uid` ='".$_POST['uid']."'";
            if ($conn->query($query2) === TRUE) {
                echo "success";
            } else {
                echo "Error:" . $conn->error;
            }
        } else {
            echo "Error:" . $conn->error;
        }
    } else {
        echo "Error:" . $conn->error;
    }

}else{
    echo "<h1>entha mone hacking aano<h1><br><img src='./images/shammi.jpg' alt='parayenne'>";
}
?>