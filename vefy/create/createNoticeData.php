<?php
    include "../connect/connect.php";

    for( $i=1; $i<=20; $i++ ){
        $regTime = time();

        $sql = "INSERT INTO myNotice(myMemberID, noticeTitle, noticeContent, noticeView, regTime) VALUES('1', 'vefy${i}', '공지사항 ${i}번째 내용입니다. 내용입니다.', '1', '$regTime')";
        
        $result = $connect -> query($sql);

        if($result){
            echo "true";
        } else {
            echo "false";
        }
    }
?>