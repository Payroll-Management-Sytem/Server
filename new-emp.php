<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';

        
        $query = "INSERT INTO `loginpage`(`uid`,`username`, `password`) VALUES (\"".$_POST['uid']."\",\"".$_POST['username']. "\",\"" . $_POST['pass'] . "\")";
    if ($conn->query($query) === TRUE) { 
        $query1 = "INSERT INTO `employeedetails`(`uid`,`username`, `empid`,`empname`,`age`,`dob`,`gender`,`dateofjoining`,`designation`,`office`) VALUES (\"".$_POST['uid']."\",\"".$_POST['username']. "\",\"" . $_POST['empid'] . "\",\"".$_POST['empname']. "\",\"".$_POST['age']. "\",\"".$_POST['dob']. "\",\"".$_POST['gender']. "\",\"".$_POST['doj']. "\",\"".$_POST['desig']. "\",\"".$_POST['ofc']. "\")";
        if ($conn->query($query1) === TRUE) {
            echo "success";
        } else {
            echo "Error:" . $conn->error;
        }
    } else {
        echo "Error:" . $conn->error;
    }

}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>