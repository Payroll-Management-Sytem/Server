<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';
    $sql ="Select * from salarydetails";
    $result=mysqli_query($conn,$sql);
    $string="";
    $num=0;
    if ($row=mysqli_fetch_array($result)){
        do{
            $num=$num+1;
            $net=($row[4]+(float)$row[5]*(float)$row[4]*0.01+(float)$row[6]*(float)$row[4]*0.01+(float)$row[7]*(float)$row[4]*0.01)-((float)$row[8]*(float)$row[4]*0.01+(float)$row[9]*(float)$row[4]*0.01+(float)$row[10]*(float)$row[4]*0.01);
            $string=$string.'<tr style="height: 48px;">
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$num.'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[0].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[2].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[3].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell"> ₹'.$row[4].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell"> ₹'.(float)$row[5]*(float)$row[4]*0.01.'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell"> ₹'.(float)$row[6]*(float)$row[4]*0.01.'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell"> ₹'.(float)$row[7]*(float)$row[4]*0.01.'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell"> ₹'.(float)$row[8]*(float)$row[4]*0.01.'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell"> ₹'.(float)$row[9]*(float)$row[4]*0.01.'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell"> ₹'.(float)$row[10]*(float)$row[4]*0.01.'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell"> ₹'.$net.'</td>
            </tr>';
        }while($row=mysqli_fetch_array($result));
        echo $string;
    }

}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>