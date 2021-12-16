<?php
    $host = "localhost";
    $user = "vefy21";
    $pass = "ghkdtkddus5008*";
    $db = "vefy21";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo  "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>