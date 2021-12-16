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
                <img src="../assets/img/로즈마리.png" alt="스토어">
            </div>
            <div class="contentDesc">
                <div class="main_right">
                    <div class="right_top">
                        <div class="Goods_title">
                            <div class="title_main">로즈마리</div>
                            <div class="title_desc">100g당 판매가: xxxx원</div>
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
                                    <li class="checkbox1"><a href="#">로즈마리 1팩</a></li>
                                    <li class="checkbox2"><a href="#">로즈마리 2팩 (+ 8000원 )</a></li>
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
                1 소화 기능 개선 과식을 하거나 소화가 안 될 때 로즈마리 차를 한 잔 마시면 속이 편안해지는 것을 느낄 수 있을 것이다. ...<br>
                2 기억력 및 집중력 향상 ...<br>
                3 면역력 강화 ...<br>
                4 눈 건강 보호 ...<br>
                5 기분 개선
            </div>
            <div class="imgBox">
                <img src="../assets/img/jo.png" alt="조은선">
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