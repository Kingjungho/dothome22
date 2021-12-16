<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>수정하기</title>
</head>
<body>
    <?php
        include "../connect/connect.php";
        include "../connect/session.php";
        include "../connect/sessionCheck.php";

        $qnaID = $_POST['qnaID'];
        $qnaTitle = $_POST['qnaTitle'];
        $qnaContent = $_POST['qnaContent'];
        $qnaPass = $_POST['qnaPass'];

        // echo $boardID, $boardTitle, $boardContent, $boardPass;
        // echo "<pre>";
        // var_dump($_SESSION);
        // echo "</pre>";

        $qnaTitle = $connect -> real_escape_string($qnaTitle);
        $qnaContent = $connect -> real_escape_string($qnaContent);
        $memberID = $_SESSION['myMemberID'];

        $sql = "SELECT * FROM myMember WHERE myMemberID = '{$memberID}'";
        $result = $connect -> query($sql);

        if($result){
            $info = $result -> fetch_array(MYSQLI_ASSOC);

            // echo "<pre>";
            // var_dump($info);
            // echo "</pre>";

            // 비밀번호 확인
            if($info['youPass'] == $qnaPass && $info['myMemberID'] == $memberID){
                // 업데이트
                $sql = "UPDATE myQna SET qnaTitle = '{$qnaTitle}', qnaContent = '{$qnaContent}' WHERE myQnaID = '{$qnaID}'";
                $result = $connect -> query($sql);
            } else {
                echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번 확인해주세요.'); history.back(1);</script>";
            }
        }
    ?>

    <script>
        location.href="qna.php";
    </script>
</body>
</html>
