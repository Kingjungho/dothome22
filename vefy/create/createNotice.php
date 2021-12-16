<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE myNotice (";
    $sql .= "myNoticeID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "noticeTitle varchar(50) NOT NULL,";
    $sql .= "noticeContent longtext NOT NULL,";
    $sql .= "noticeView int(10) NOT NULL,";
    $sql .= "regTime int(15) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (myNoticeID)) CHARSET=utf8;";

    $result = $connect -> query($sql);

    // if($result){
    //     echo "Creat Notice True";
    // } else {
    //     echo "Creat Notice False";
    // };
?>