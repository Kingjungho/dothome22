<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $qnaID = $_GET['qnaID'];
    $qnaID = $connect -> real_escape_string($qnaID);

    $sql = "DELETE FROM myQna WHERE myQnaID = {$qnaID}";
    $connect -> query($sql);
?>
<script>
    location.href = "qna.php";
</script>