<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.php';
    foreach($_POST as $value){
        echo $value."<br>";
    }

}else{
    echo "<h1>entha mone hacking aano<h1><br><img src=\"./images/shammi.jpg\" alt=\"parayenne\">";
}
?>