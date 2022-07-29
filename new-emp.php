<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';

        // echo $_POST['username']."<br>";
        // foreach($_POST as $value){
        //     echo $value."<br>";
        // }
        $query = "INSERT INTO `loginpage`(`uid`,`username`, `empid`,`empname`,`dob`,`gender`,`dateofjoining`,`designation`,`office`) VALUES (\"".$_POST['uid']."\",\"".$_POST['username']. "\",\"" . $_POST['empid'] . "\",\"".$_POST['empname']. "\",\"".$_POST['age']. "\",\"".$_POST['dob']. "\",\"".$_POST['gender']. "\",\"".$_POST['doj']. "\",\"".$_POST['desig']. "\",\"".$_POST['ofc']. "\")";
    if ($conn->query($query) === TRUE) { $query = "INSERT INTO `employeedetails`(`uid`,`username`, `password`) VALUES (\"".$_POST['uid']."\",\"".$_POST['username']. "\",\"" . $_POST['pass'] . "\")";
        if ($conn->query($query) === TRUE) {
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