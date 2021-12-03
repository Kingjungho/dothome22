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
    <title>댓글</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- skip -->
    <div id="skip">
        <a href="#contents">contents 바로가기</a>
        <a href="#footer">footer 바로가기</a>
    </div>
    <!-- skip -->   
    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
        <!-- contents -->
        <main id="contents">
        <section id="mainCont">
        <h2 class="ir_so">메인 컨텐츠</h2>   
            <article class="content-article">
                 <!-- cardType01 -->
     <section class="cardType">
            <div class="cardType01">
                <h2>프론트앤드 강의</h2>
                <p>프론트앤드 개발자가 되기 위한 과정에 도움이 될 강의 제공 및 여러가지 정보 등을 서로 공유하는 사이트입니다.<br>
                    홍보 및 광고 게시글 허용X</p>
                <div class="card-wrap">
                    <div class="card">
                        <a href="#">
                            <img src="../assets/img/card04.jpg" alt="초심자 가이드북 이미지입니다." class="card-img">
                            <strong class="card-title">프론트앤드 초심자 가이드북 제공</strong>
                            <span class="card-desc">입문자들도 쉽게 보고 따라할 수 있는 수준의 가이드북 입니다.</span>
                            <span class="card-keyword">
                                <span>#코린이</span>
                                <span>#코딩 초보</span>
                                <span>#코딩 입문</span>
                            </span>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../assets/img/card05.jpg" alt="초심자 가이드북 이미지입니다." class="card-img">
                            <strong class="card-title">PC , 모바일 기기 각 1대 연동가능</strong>
                            <span class="card-desc">장소에 구애받지 않고 어디서나 무료로 시청이 가능합니다.</span>
                            <span class="card-keyword">
                                <span>#장소 무관 </span>
                                <span>#언제 어디서나</span>
                            </span>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../assets/img/card06.jpg" alt="초심자 가이드북 이미지입니다." class="card-img">
                            <strong class="card-title">고급 과정까지 심도있게 !</strong>
                            <span class="card-desc">중급 , 고급 , 최고급 과정까지 전문 강사들의 심도있는 강의</span>
                            <span class="card-keyword">
                                <span>#프론트앤드 마스터</span>
                                <span>#끝판왕</span>
                            </span>
                        </a>
                    </div>
                </div>
            </article>
            <artilce class="flow-article">
                    <h3 class="ir_so">MY 강의 신청하기</h3>
                <section id="comment" class="section-comment">
                    <h4>강의 신청하기</h4>
                    <p>강의 수강을 원하는 분들은 댓글로 참여신청을 해주세요!</p>
                    <div class="comment-form">
                        <form action="commentSave.php" method="post" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글 영역</legend>
                            <div class="comment-wrap">
                            <div>
                                <label for="youName" class="ir_so">이름</label>
                                <input type="text" name="youName" class="input_write2" placeHolder="이름" autocomplete="off" maxlength = "10" required>
                            </div>
                            <div>
                                <label for="youText" class="ir_so">강의 신청하기</label>
                                <input type="text" name="youText" class="input_write2 w100" placeHolder="신청과목을 적어주세요!" autocomplete="off" required>
                            </div>
                            <button class="btn_submit2" type="submit" value="신청하기">go</button>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment LIMIT 10";
                            $result = $connect -> query($sql);

                            // echo "<pre>";
                            // var_dump(mysqli_fetch_array($result));
                            // echo "<pre>";

                            while( $info = mysqli_fetch_array($result) ){
                        ?>
                            <div>
                                <p><?=$info['youText']?></p>
                                <div>
                                    <img src="http://dkdlwo.dothome.co.kr/class/img/img05.jpg" alt="">
                                    <span><?=$info['youName']?></span>
                                    <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                </div>      
                            </div>  
                        <?php
                            }
                        ?>

                        <!-- <div>
                            <p>저 신청하고 싶어요. 제발 받아주세요!</p>
                            <div class="icon">
                                <img src="http://dkdlwo.dothome.co.kr/class/img/img05.jpg" alt="">
                                <span>고길동</span>
                                <span>2020-03-04</span>
                            </div>      
                        </div>     -->

                    </div>
                </section>
            </artilce>
        </section>
    <!-- cardType 01 -->

</div>  
        </section>
    </main>
        <!-- contents -->

        <!-- footer -->
        <footer id="footer">
            footer
        </footer>
        <!-- footer -->
</body>
</html>