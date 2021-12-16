<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE myLike (";
    $sql .= "myLikeID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "regTime int(15) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (myLikeID)) CHARSET=utf8;";

    $result = $connect -> query($sql);

    if($result){
        echo "Creat Like True";
    } else {
        echo "Creat Like False";
    };
?>