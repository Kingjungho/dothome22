<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>스토어 상세페이지</title>
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/storeDetailPage.css">
</head>

<body>
    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->


    <div class="container">
        <div class="search">
            <span class="glasses"><img src="../assets/img/돋보기.png" alt="돋보기"></span>
            <input type="text" name="storeSearch" id="storeSearch" class="store_search"
                placeholder="상품명을 입력하세요"></input>
            <span class="search_click"><a href="#">검색</a></span>
        </div>
        <div class="header_wrap">
            <div class="header_left">
                <div class="ham_wrap">
                    <div class="ham">
                        <span></span>
                    </div>
                    <span class="category">전체 카테고리</span>
                </div>
            </div>
        </div>
        <div class="ham_tab">
            <div class="tab_left">
                <div>FOOD</div>
                <div>DAILY</div>
                <div>BEAUTY</div>
                <div>CLASS</div>
            </div>
            <div class="tab_right">
                <div>FOOD</div>
                <div>DAILY</div>
                <div>BEAUTY</div>
                <div>CLASS</div>
            </div>
        </div>
        <div class="store_main">
            <div class="main_left">
                <img src="../assets/img/apple.jpg" alt="상품 이미지">
            </div>
            <div class="main_right">
                <div class="right_top">
                    <div class="Goods_title">
                        <div class="title_main">한돈 삼겹살 2종 (냉장)</div>
                        <div class="title_desc">100g당 판매가: 구이용 3,766원 / 수육용 3,500원</div>
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
                        <span class="right">수령일 포함 최소 5일 이상 남은 제품을 보내드립니다.</span>
                    </div>
                    <div class="Goods_check">
                        <span class="left">상품 선택</span>
                        <div class="inner">
                            <a href="#" class="right">상품 선택</a>
                            <ul class="checkbox">
                                <li class="checkbox1"><a href="#">한돈 삼겹살 구이용</a></li>
                                <li class="checkbox2"><a href="#">한돈 삼겹살 수육용</a></li>
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

        clickBtn.addEventListener("click", (e) => {
            e.preventDefault();
            checkBox.classList.toggle("active");
        })
    </script>
</body>

</html>