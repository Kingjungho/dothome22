<?php
    include "../connect/connect.php";

    $likeID = $_POST['myLikeID'];
    $memberID = $_POST['myMemberID'];

    if ( !$is_member) {
        //회원이 아닌 경우 로그인 페이지로 이동 
        $href = '../login/login.php'; 
        alert('회원만 가능합니다.', $href); 
    }

    if (!($it_id && $is_id)) 
        alert('값이 제대로 넘어오지 않았습니다.');

        $sql = "SELECT myLikeID AS count FROM myLike WHERE myMemberID = '{$memberID}' "; 
        $row = sql_fetch($sql); 
        $cnt = $row['count'];

    if ($cnt > 0) { //이미 좋아요를 누른 경우 기존 좋아요 삭제
        //내역 삭제 
        sql_query("DELETE FROM myLike WHERE myLikeID = '{$likeID}' and myMemberID = '{$memberID}'");

        //좋아요수 
        $sql2 = "SELECT * FROM myLike WHERE myLikeID = '{$likeID}'"; 
        $lk = sql_fetch($sql2);

        echo "<i class='far fa-heart'></i> ".$lk['is_like']; // 빈 하트 + 좋아요수 출력
    }  else  {  
        // 내역 생성 
        sql_query("INSERT myLike SET myLikeID = '{$likeID}', myMemberID = '{$memberID}', regTime = '".G5_TIME_YMDHIS."' ");

        //좋아요수
        $sql2 = "SELECT * FROM myLike WHERE myLikeID = '{$likeID}'"; 
        $lk = sql_fetch($sql2);

        echo "<i class='fas fa-heart'></i> ".$lk['is_like']; // 꽉찬 하트 + 좋아요수 출력 
    }