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
                $string = "
            <div class=\"row\"><div class=\"col-1\"></div><div class=\"col-2\"></div><div class=\"col-6 i\"><h2><strong>Details for the month ".$row[11]." ".$row[12]."</strong></h2></div><div class=\"col-3\"></div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Employee ID </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">".$row1[0]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Employee Name </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">".$row1[1]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Designation </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">".$row1[2]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Office </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">".$row1[3]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\"></div><div class=\"col-2 i\"><h3><strong>Earnings</strong></h3></div><div class=\"col-4\"></div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Basic Pay </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">₹ ".$row[4]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Dearness Allowance </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">₹ ".(float)$row[5]*(float)$row[4]*0.01."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">House Rent Allowance </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">₹ ".(float)$row[6]*(float)$row[4]*0.01."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">CCA </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">₹ ".(float)$row[7]*(float)$row[4]*0.01."</div></div>            
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\"></div><div class=\"col-2 i\"><h3><strong>Deductions</strong></h3></div><div class=\"col-4\"></div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">LIC </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">₹ ".(float)$row[8]*(float)$row[4]*0.01."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">SLI </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">₹ ".(float)$row[9]*(float)$row[4]*0.01."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">GPF </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">₹ ".(float)$row[10]*(float)$row[4]*0.01."</div></div>";
                // $string = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                // &nbsp;&nbsp;&nbsp;<span style=\"font-weight: 700;\">Salary Details for the month ".$row[11]." ".$row[12]."</span>
                // <br>
                // Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: ".$row1[0]."</span><br>
                // Employee Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$row1[1]."<br>
                // Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$row1[2]."<br>
                // Office &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  ".$row1[3]."<br>
                // <strong>Earnings</strong><br>
                // Basic Pay &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ₹ ".$row[4]."<br>
                // DA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ₹ ".(float)$row[5]*(float)$row[4]*0.01."<br>
                // HRA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ₹ ".(float)$row[6]*(float)$row[4]*0.01."<br>
                // CCA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ₹ ".(float)$row[7]*(float)$row[4]*0.01."<br>
                // <strong>Deductions</strong><br>
                // LIC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ₹ ".(float)$row[8]*(float)$row[4]*0.01."<br>
                // SLI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ₹ ".(float)$row[9]*(float)$row[4]*0.01."<br>
                // GPF &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ₹ ".(float)$row[10]*(float)$row[4]*0.01."<br>";
                echo $string;
            }while($row=mysqli_fetch_array($result));
        }else{
            // $string = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // &nbsp;&nbsp;&nbsp;<span style=\"font-weight: 700;\">Salary Details</span>
            // <br>
            // Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:  ".$row1[0]."<br>
            // Employee Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  ".$row1[1]."<br>
            // Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  ".$row1[2]."<br>
            // Office &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  ".$row1[3]."<br>
            // <strong>Earnings</strong><br>
            // Basic Pay &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: not paid<br>
            // DA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: not paid<br>
            // HRA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: not paid<br>
            // CCA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: not paid<br>
            // <strong>Deductions</strong><br>
            // LIC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: not paid<br>
            // SLI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: not paid<br>
            // GPF &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: not paid<br>";
            $string = "
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\"></div><div class=\"col-3\"><h2><strong>Salary Details</strong></h2></div><div class=\"col-4\"></div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Employee ID </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">".$row1[0]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Employee Name </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">".$row1[1]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Designation </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">".$row1[2]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Office </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">".$row1[3]."</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\"></div><div class=\"col-2 i\"><h3><strong>Earnings</strong></h3></div><div class=\"col-4\"></div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Basic Pay </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">Not Paid</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">Dearness Allowance </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">Not Paid</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">House Rent Allowance </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">Not Paid</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">CCA </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">Not Paid</div></div>            
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\"></div><div class=\"col-2 i\"><h3><strong>Deductions</strong></h3></div><div class=\"col-4\"></div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">LIC </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">Not Paid</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">SLI </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">Not Paid</div></div>
            <div class=\"row\"><div class=\"col-2\"></div><div class=\"col-3\">GPF </div><div class=\"col-2 i\"> : </div><div class=\"col-1\"></div><div class=\"col-4\">Not Paid</div></div>";
            echo $string;
        }
}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>