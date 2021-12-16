<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE myQna (";
    $sql .= "myQnaID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "qnaTitle varchar(50) NOT NULL,";
    $sql .= "qnaContent longtext NOT NULL,";
    $sql .= "qnaView int(10) NOT NULL,";
    $sql .= "regTime int(15) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (myQnaID)) CHARSET=utf8;";

    $result = $connect -> query($sql);

    if($result){
        echo "Creat Notice True";
    } else {
        echo "Creat Notice False";
    };
?>