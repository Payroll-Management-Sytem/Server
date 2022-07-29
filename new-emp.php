<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';

        // echo $_POST['username']."<br>";
        // foreach($_POST as $value){
        //     echo $value."<br>";
        // }
        $query = "INSERT INTO `loginpage`(`uid`,`username`, `password`) VALUES (\"".$_POST['uid']."\",\"".$_POST['username']. "\",\"" . $_POST['pass'] . "\")";
    if ($conn->query($query) === TRUE) {
        echo "success";
    } else {
        echo "Error:" . $conn->error;
    }

}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>