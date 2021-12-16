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
    <title>스토어</title>
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/storeDetailPage2.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

    <div class="cotainer">
        <div class="contentWrap">
            <div class="contentImg">
                <img src="../assets/img/세트 상품.png" alt="스토어">
            </div>
            <div class="contentDesc">
                <div class="main_right">
                    <div class="right_top">
                        <div class="Goods_title">
                            <div class="title_main">[기획] 세트 상품</div>
                            <div class="title_desc">세트 개당 판매가: xxxx원</div>
                        </div>
                        <div class="Goods_price">11,300원</div>
                        <span class="price_sale">15%</span>
                        <span class="price_real">9,999<span>원</span></span>
                    </div>
                    <div class="right_bottom">
                        <div class="Goods_delivery">
                            <span class="left">배송구분</span>
                            <span class="right">샛별배송 / 택배배송</span>
                        </div>
                        <div class="Goods_deliveryPrice">
                            <span class="left">배송비</span>
                            <span class="right">2500원</span>
                        </div>
                        <div class="Goods_origin">
                            <span class="left">원산지</span>
                            <span class="right">국내산</span>
                        </div>
                        <div class="Goods_shelflife">
                            <span class="left">유통기한</span>
                            <span class="right">수령일 포함 최소 5일 이상 남은 제품을 <span class="send">보내드립니다.</span></span>
                        </div>
                        <div class="Goods_check">
                            <span class="left">상품 선택</span>
                            <div class="inner">
                                <a href="#" class="right">상품 선택</a>
                                <ul class="checkbox">
                                    <li class="checkbox1"><a href="#">[기획] 세트 상품 1팩</a></li>
                                    <li class="checkbox2"><a href="#">[기획] 세트 상품 2팩 ( +8000원 )</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="shopping">
                        <a href="#" class="shopping_left">장바구니에 담기</a>
                        <a href="#" class="shopping_right">바로 결제</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Detail">상세 보기<span class="material-icons">
                unfold_more
            </span></div>
        <div class="DetailEx">
            <div class="textBox">
                <strong>바나나</strong> : 저널에 실린 연구에 의하면 바나나에 풍부한 칼륨은 정상 혈압과 심장 기능을 유지시키는 등 심혈관에 여러 가지 효능이 있는 것으로 나타났다.<br>
                <strong>아보카도</strong> : 비타민A와 비타민C가 풍부하게 들어 있어 피로 회복에 도움이 되고, 면역력을 높이며 눈 건강에도 좋다.<br>
                <strong>토마토</strong> :토마토가 몸에 좋은 이유는 소화를 돕는 것에서 끝나지 않는다. 토마토에는 피로를 풀고 신진대사를 돕는 비타민 C와 지방 분해를 돕는 비타민 B, 항산화 작용으로 노화를 막는 리코펜, 고혈압을 예방하는 루틴 등 몸에 좋은 성분이 많이 들어 있다.
            </div>
            <div class="imgBox">
                <img src="../assets/img/kim.png" alt="김정호">
            </div> 
        </div>
    </div>

    <!-- //footer -->
    <footer id="footer">
        <?php
            include "../include/footer.php"
        ?>
    </footer>
    <!-- //footer -->
    <script>
        let clickBtn = document.querySelector(".inner .right");
        let checkBox = document.querySelector(".checkbox");
        let detail = document.querySelector(".Detail");
        let detailEx = document.querySelector(".DetailEx");
        
        function exHandler(e){
            e.preventDefault();
            detailEx.classList.toggle("active");
        }
        detail.addEventListener("click", exHandler);

        clickBtn.addEventListener("click", (e) => {
            e.preventDefault();
            checkBox.classList.toggle("active");
        })
    </script>
</body>

</html>