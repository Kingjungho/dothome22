<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $qnaTitle = $_POST['qnaTitle'];
    $qnaContent = $_POST['qnaContent'];

    // echo $qnaTitle, $qnaContent;

    $qnaTitle = $connect -> real_escape_string($qnaTitle);
    $qnaContent = $connect -> real_escape_string($qnaContent);
    $qnaView = 0;
    $regTime = time();
    $memberID = $_SESSION['myMemberID'];

    //데이터 입력
    $sql = "INSERT INTO myQna(myMemberID, qnaTitle, qnaContent, qnaView, regTime) VALUES('$memberID', '$qnaTitle', '$qnaContent', '$qnaView', '$regTime')";

    $result = $connect -> query($sql);

    // if($result) {
    //     echo "good";
    // }else {
    //     echo "bad..";
    // }
?>

<script>
    location.href = "qna.php";
</script>