<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $noticeID = $_GET['noticeID'];
    $noticeID = $connect -> real_escape_string($noticeID);

    $sql = "DELETE FROM myNotice WHERE myNoticeID = {$noticeID}";
    $connect -> query($sql);
?>
<script>
    location.href = "notice.php";
</script>