<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';
    $sql ="Select * from employeedetails order by dateofjoining";
    $result=mysqli_query($conn,$sql);
    $string="";
    $num=0;
    if ($row=mysqli_fetch_array($result)){
        do{
            $num=$num+1;
            $string=$string.'<tr style="height: 48px;">
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$num.'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[0].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[1].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[2].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[3].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[4].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[5].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[6].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[7].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[8].'</td>
                <td class="u-border-2 u-border-grey-dark-1 u-table-cell">'.$row[9].'</td>
            </tr>';
        }while($row=mysqli_fetch_array($result));
        echo $string;
    }

}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>