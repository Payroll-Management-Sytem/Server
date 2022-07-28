<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';
    $sql = "SELECT `empid`,`empname`,`designation`,`office` from `employeedetails` where uid=\"".$_POST['uid']."\"";
    $sql2 = "SELECT *,monthname(paydate),year(paydate) from `salarydetails` where uid=\"".$_POST['uid']."\" and month(paydate)=".(int)$_POST['date'];
    $result1=mysqli_query($conn,$sql);
    $row1=mysqli_fetch_array($result1);
    
    $result=mysqli_query($conn,$sql2);
    if ($row=mysqli_fetch_array($result)) 
        {   
            do{
                $string = "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;<span style=\"font-weight: 700;\">Salary Details for the month ".$row[11]." ".$row[12]."</span>
                <br>Employee ID:  ".$row1[0]."</span><br>Employee Name :  ".$row1[1]."<br>Designation :  ".$row1[2]."<br>Office :  ".$row1[3]."<br>Scale of Pay : <br><strong>Earnings</strong><br> Basic
                Pay : ₹".$row[4]."<br>DA : ₹".(float)$row[5]*(float)$row[4]*0.01."<br>HRA : ₹".(float)$row[6]*(float)$row[4]*0.01."<br>CCA : ₹".(float)$row[7]*(float)$row[4]*0.01."<br><strong>Deductions</strong><br>Insurance,LIC : ₹".(float)$row[8]*(float)$row[4]*0.01."<br>SLI : ₹".(float)$row[9]*(float)$row[4]*0.01."<br>GPF : ₹".(float)$row[10]*(float)$row[4]*0.01."<br>";
                echo $string;
            }while($row=mysqli_fetch_array($result));
        }else{
            $string = "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp;<span style=\"font-weight: 700;\">Salary Details</span>
            <br>Employee ID:  ".$row1[0]."</span><br>Employee Name :  ".$row1[1]."<br>Designation :  ".$row1[2]."<br>Office :  ".$row1[3]."<br>Scale of Pay : <br><strong>Earnings</strong><br> Basic
            Pay : not paid<br>DA : not paid<br>HRA : not paid<br>CCA : not paid<br><strong>Deductions</strong><br>Insurance,LIC : not paid<br>SLI : not paid<br>GPF : not paid<br>";
            echo $string;
        }
}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>