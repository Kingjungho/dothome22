<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>V.E.F.Y</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/introduce.css">

    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">

</head>

<body>

    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->
    <main id="introduce">
        <div class="introduce">
            <div class="container">
                <div class="introduce_wrap">
                    <div class="img img1">
                        <img src="../assets/img/intro1.jpg" alt="첫번째 이미지">
                        <div class="youtube">
                            <a href="https://youtu.be/wYK5QYOd_y0?list=PL4UVBBIc6giLuf_RGVVd-fUpgd-c6hReX"></a>
                        </div>
                    </div>
                    <div class="img img2">
                        <img src="../assets/img/intro2.jpg" alt="두번째 이미지">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>