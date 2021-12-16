<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $noticeTitle = $_POST['noticeTitle'];
    $noticeContent = $_POST['noticeContent'];

    // echo $qnaTitle, $qnaContent;

    $noticeTitle = $connect -> real_escape_string($noticeTitle);
    $noticeContent = $connect -> real_escape_string($noticeContent);
    $noticeView = 0;
    $regTime = time();
    $memberID = $_SESSION['myMemberID'];

    //데이터 입력
    $sql = "INSERT INTO myNotice(myMemberID, noticeTitle, noticeContent, noticeView, regTime) VALUES('$memberID', '$noticeTitle', '$noticeContent', '$noticeView', '$regTime')";

    $result = $connect -> query($sql);

    // if($result) {
    //     echo "good";
    // }else {
    //     echo "bad..";
    // }
?>

<script>
    location.href = "notice.php";
</script>