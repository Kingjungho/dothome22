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
    <link rel="stylesheet" href="../assets/css/store2.css">
</head>

<body>
    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

    <div class="header_aside">
        <!-- <h1>STORE</h1> -->
    </div>
    <div class="container">
        <h2>New Product</h2>
        <div class="slider">
            <div class="img_wrap">
                <div class="img_box box1">
                    <a href="http://vefy21.dothome.co.kr/store/storeDetailPage2.php">
                        <div class="new_img_box">
                            <img src="../assets/img/로즈마리.png" alt="이미지1">
                        </div>
                        <div class="img_desc">the Mediterranean coast Rosemary</div>
                        <div class="store_btn">View →</div>
                    </a>
                </div>
                <div class="img_box box2">
                    <a href="http://vefy21.dothome.co.kr/store/storeDetailPage3.php">
                        <div class="new_img_box">
                            <img src="../assets/img/세트 상품.png" alt="이미지2">
                        </div>
                        <div class="img_desc">Food with Avocado Banana Tomato</div>
                        <div class="store_btn">View →</div>
                    </a>
                </div>
                <div class="img_box box3">
                    <a href="http://vefy21.dothome.co.kr/store/storeDetailPage4.php">
                        <div class="new_img_box">
                            <img src="../assets/img/체리.png" alt="이미지3">
                        </div>
                        <div class="img_desc">Natural, pesticide-free cherries</div>
                        <div class="store_btn">View →</div>
                    </a>
                </div>
            </div>
        </div>
        <h2 class="popular">Popular Product</h2>
        <div class="storeWrap">
            <div class="img_wrap2">
                <div class="img_box2">
                    <a href="/">
                        <img src="../assets/img/popular1.png" alt="이미지1">
                        <div class="desc">
                            <span class="desc_top">SUMMER</span>
                            <span class="desc_top2">VEGETARIAN</span>
                            <div class="desc_bottom">Salad with fresh fruits and vegetables</div>
                        </div>
                    </a>
                </div>
                <div class="img_box2">
                    <a href="/">
                        <img src="../assets/img/popular2.png" alt="이미지1">
                        <div class="desc">
                            <span class="desc_top">SUMMER</span>
                            <span class="desc_top2">VEGETARIAN</span>
                            <div class="desc_bottom">Sweet Pumpkin Hamburgers for Vegans</div>
                        </div>
                    </a>
                </div>
                <div class="img_box2">
                    <a href="/">
                        <img src="../assets/img/popular3.png" alt="이미지1">
                        <div class="desc">
                            <span class="desc_top">SUMMER</span>
                            <span class="desc_top2">VEGETARIAN</span>
                            <div class="desc_bottom">Vegetables packed with nature</div>
                        </div>
                    </a>
                </div>
                <div class="img_box2">
                    <a href="/">
                        <img src="../assets/img/popular4.png" alt="이미지1">
                        <div class="desc">
                            <span class="desc_top">WINTER</span>
                            <span class="desc_top2">VEGETARIAN</span>
                            <div class="desc_bottom">Spicy Seasoning Potato</div>
                        </div>
                    </a>
                </div>
                <div class="img_box2">
                    <a href="/">
                        <img src="../assets/img/popular5.png" alt="이미지1">
                        <div class="desc">
                            <span class="desc_top">SUMMER</span>
                            <span class="desc_top2">VEGETARIAN</span>
                            <div class="desc_bottom">Avocado With Taco</div>
                        </div>
                    </a>
                </div>
                <div class="img_box2">
                    <a href="/">
                        <img src="../assets/img/popular6.png" alt="이미지1">
                        <div class="desc">
                            <span class="desc_top">SUMMER</span>
                            <span class="desc_top2">VEGETARIAN</span>
                            <div class="desc_bottom">Melon Bingsu with Figs</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="store-btn">
            <span onclick="productCR(); return false;">View More</span>
        </div>
    </div>  


    <!-- //footer -->
    <footer id="footer">
        <?php
        include "../include/footer.php"
    ?>
    </footer>
    <!-- //footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        const imgWrap = $(".img_wrap");
        const imgBox = $(".img_box");

        let currentIndex1 = 0;
        let imgCount = imgBox.length;

        setInterval(() => {
            let nextIndex1 = (currentIndex1 + 1) % imgCount;

            imgBox[currentIndex1].style.flex = "0 0 25%"
            imgBox[nextIndex1].style.flex = "0 0 45%"

            currentIndex1 = nextIndex1;

        }, 3000);

        const img_wrap2 = document.querySelector(".img_wrap2");
        const img_box2 = document.querySelectorAll(".img_box2");

        function productCR(){
            
            var myTest = new Array('1', '2', '3', '4', '5', '6');
            function randomItem(a){
                return a[Math.floor(Math.random() * a.length)];
            } randomItem(myTest);

            const output = [];

            output.push(`
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Salad with fresh fruits and vegetables</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Sweet Pumpkin Hamburgers for Vegans</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Vegetables packed with nature</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">WINTER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Spicy Seasoning Potato</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Avocado With Taco</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Melon Bingsu with Figs</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Salad with fresh fruits and vegetables</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Sweet Pumpkin Hamburgers for Vegans</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Vegetables packed with nature</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">WINTER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Spicy Seasoning Potato</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Avocado With Taco</div>
                    </div>
                </a>
            </div>
            <div class="img_box2">
                <a href="/">
                    <img src="../assets/img/popular${randomItem(myTest)}.png" alt="이미지1">
                    <div class="desc">
                        <span class="desc_top">SUMMER</span>
                        <span class="desc_top2">VEGETARIAN</span>
                        <div class="desc_bottom">Melon Bingsu with Figs</div>
                    </div>
                </a>
            </div>
            `)
            img_wrap2.innerHTML += output.join(' ');

            let img = document.querySelectorAll(".img_box2 img");
            let desc = document.querySelectorAll(".desc");


            img.forEach((item, index) => {
                item.addEventListener("mouseover", function (e) {
                    e.preventDefault();
                    desc.forEach(item => {
                        item.classList.remove("active");
                    })
                    desc[index].classList.add("active");
                    
                })
            })
        }

        let img = document.querySelectorAll(".img_box2 img");
        let desc = document.querySelectorAll(".desc");

        img.forEach((item, index) => {
            item.addEventListener("mouseover", function (e) {
                e.preventDefault();
                desc.forEach(item => {
                    item.classList.remove("active");
                })
                desc[index].classList.add("active");
                
            })
        })
    </script>
</body>

</html>