<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';

        $query1 = "INSERT INTO `salarydetails`(`pid`,`uid`, `empname`,`paydate`,`basicpay`,`da`,`hra`,`cca`,`insurancelic`,`sli`,`gpf`) VALUES (\"".$_POST['pid']."\",\"".$_POST['uid']."\",\"".$_POST['empname']."\",\"".$_POST['paydate']."\",\"".$_POST['basicpay']."\",\"".$_POST['da']."\",\"".$_POST['hra']."\",\"".$_POST['cca']."\",\"".$_POST['insurancelic']."\",\"".$_POST['sli']."\",\"".$_POST['gpf']."\")";
        if ($conn->query($query1) === TRUE) {
            echo "success";
        } else {
            echo $query1;
            echo "Error:" . $conn->error;
        }

}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>