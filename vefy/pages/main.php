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
    <link rel="stylesheet" href="../assets/css/main.css">

    <!-- swiper -->
    <link rel="stylesheet" href="../assets/css/normal/swiper-bundle.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">

</head>

<body onload="setHalfVolume(); return=false;">

    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

    <div id=bodyWrap>
        <main id="main">
            <section class="banner">
                <audio class="audio" src="../assets/mp3/Drops of Earth.mp3" controls autoplay loop volume="0.2">
                    지원하지 않습니다.
                </audio>
                <div class="banner-wrap">
                    <div class="banner-img-wrap">
                        <div class="banner-img">
                            <img class="imgBox1" src="../assets/img/main.jpg" alt="이미지입니다.">
                        </div>
                    </div>
                    <div class="banner-desc">
                        <h2><a href="introduce.php">Welcome to "V.E.F.Y"</a></h2>
                        <p>We will post many ways to be happy and healthy on "VEFY"<br>And we hope the "VEFY" site will
                            make you happy. </p>
                    </div>
                    <div class="banner-middle">
                        <div class="slider-img">
                            <div class="slider">
                                <img src="../assets/img/simg4.png" alt="이미지1">
                            </div>
                            <div class="slider">
                                <img src="../assets/img/simg1.png" alt="이미지2">
                            </div>
                            <div class="slider">
                                <img src="../assets/img/simg3.png" alt="이미지3">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contents">
                <section id="cont1" class="section">
                    <div class="container">
                        <div class="sectionCont-box">
                            <h3>VEGAN FRIENDLY</h3>
                            <p>비건 프렌들리 V.E.F.Y는 채식과 건강에 대한 여러가지 정보를 알려주고 공유 할 수 있는 웹 서비스 사이트입니다.</p>
                            <p class="eng">Vegan Friendly V.E.F.Y provides web services that inform and share various
                                information about vegetarianism and health.</p>
                            <ul>
                                <!-- <li><a href="../board/board.php">커뮤니티로 바로가기</a></li> -->
                                <li><a href="../board/board.php">go to Community</a></li>
                            </ul>
                        </div>
                        <div class="sectionCont-img-box">
                            <img src="../assets/img/mainImg1.jpeg" alt="이미지입니다.">
                        </div>
                        <div class="sectionCont-bg-box"></div>
                    </div>
                </section>
                <section id="cont2" class="section">
                    <div class="container">
                        <div class="sectionCont-img-box">
                            <img src="../assets/img/mainImg2.png" alt="이미지입니다.">
                        </div>
                        <div class="sectionCont-box">
                            <h3>Recipe</h3>
                            <p>자신만의 레시피와 여러가지 정보를 알려주고 공유해보세요.</p>
                            <p class="eng">Tell me your own recipe and various information and share it.</p>
                            <ul>
                                <!-- <li><a href="../board/boardRecipe.php">레시피로 바로가기</a></li> -->
                                <li><a href="../board/boardRecipe.php">go to Recipe</a></li>
                            </ul>
                        </div>
                        <div class="sectionCont-bg-box"></div>
                    </div>
                </section>
                <section id="cont3" class="section">
                    <div class="container">
                        <div class="sectionCont-box">
                            <h3>Map</h3>
                            <p>채식 음식 맛집, 채식을 하는 사람도 부담없이 먹을 수 있는 음식점을 공유해보세요.</p>
                            <p class="eng">Share a vegetarian restaurant and a restaurant where vegetarians can eat
                                without any burden.</p>
                            <ul>
                                <li><a href="../map/map.php">go to Map</a></li>
                            </ul>
                        </div>
                        <div class="sectionCont-img-box">
                            <img src="../assets/img/mainImg3.png" alt="이미지입니다.">
                        </div>
                        <div class="sectionCont-bg-box"></div>
                    </div>
                </section>
                <section id="cont2" class="section">
                    <div class="container">
                        <div class="sectionCont-img-box">
                            <img src="../assets/img/mainImg4.png" alt="이미지입니다.">
                        </div>
                        <div class="sectionCont-box">
                            <h3>Customer Service</h3>
                            <p>궁금한 사항이나 Q&A가 있으면 언제든지 알려주세요.</p>
                            <p class="eng">Please let me know if you have any questions.</p>
                            <ul>
                                <li><a href="../QNA/qna.php">go to Service</a></li>
                            </ul>
                        </div>
                        <div class="sectionCont-bg-box"></div>
                    </div>
                </section>
            </section>
        </main>
        <section id="articelWrap">
            <div class="mid-box">
                <div class="mid-text-box">
                    <span>채식에 대한 거부감이 있더라도 건강해지고 싶은 생각은 누구에게나 있습니다.<br>채식으로 건강한 삶을 유지할 수 있는 쉬운 방법부터 환경을 지키는 방법까지 소개해드리기
                        위해 만들어진 웹 서비스 사이트입니다.</span>
                </div>
            </div>
            <div class="container">
                <section class="store p100">
                    <div class="storeWrap">
                        <div class="storeBox">
                            <h3>스토어<br>인기상품</h3>
                        </div>
                        <!-- Swiper -->
                        <div class="swiper store">
                            <div class="swiper-wrapper store">
                                <div class="swiper-slide store ss1">
                                    <div class="store_img">
                                        <img src="../assets/img/fimg1.png" alt="그릭요거트 이미지">
                                    </div>
                                    <div class="store_btn">
                                        <a href="#">삼색 토스트</a>
                                    </div>
                                </div>
                                <div class="swiper-slide store ss1">
                                    <div class="store_img">
                                        <img src="../assets/img/fimg8.png" alt="그릭요거트 이미지">
                                    </div>
                                    <div class="store_btn">
                                        <a href="#">비건 타코</a>
                                    </div>
                                </div>
                                <div class="swiper-slide store ss1">
                                    <div class="store_img">
                                        <img src="../assets/img/fimg3.png" alt="그릭요거트 이미지">
                                    </div>
                                    <div class="store_btn">
                                        <a href="#">바질 파스타</a>
                                    </div>
                                </div>
                                <div class="swiper-slide store ss1">
                                    <div class="store_img">
                                        <img src="../assets/img/fimg4.png" alt="그릭요거트 이미지">
                                    </div>
                                    <div class="store_btn">
                                        <a href="#">나물 웜볼</a>
                                    </div>
                                </div>
                                <div class="swiper-slide store ss1">
                                    <div class="store_img">
                                        <img src="../assets/img/fimg5.png" alt="그릭요거트 이미지">
                                    </div>
                                    <div class="store_btn">
                                        <a href="#">시저 샐러드</a>
                                    </div>
                                </div>
                                <div class="swiper-slide store ss1">
                                    <div class="store_img">
                                        <img src="../assets/img/fimg6.png" alt="그릭요거트 이미지">
                                    </div>
                                    <div class="store_btn">
                                        <a href="#">호밀빵 샌드위치</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- footer -->
            <footer id="footer">
                <?php
                    include "../include/footer.php";
                ?>
            </footer>
            <!-- //footer -->
        </section>

    </div>

    
    <!-- 모달 -->
  <!-- <div class="modalOverlay">
        <div class="modalWrap">
            <div class="modalTop">
                <h1 class="modalTitle">VEFY</h1>
                <div class="modalDesc">Let's be friends</div>
                <p>Join our mailing list, get free shipping<br> on your first order</p>
            </div>
            <form name="login" action="loginFindID.php" method="POST">
                <fieldset>
                    <div class="modalInput">
                        <legend class="ir_so">로그인 입력</legend>
                        <div>
                            <label for="youID"></label>
                            <input type="text" name="youID" id="youID" class="input_write2" placeholder="아이디"
                                autocomplete="off" autofocus required></input>
                        </div>
                        <div>
                            <label for="youPass"></label>
                            <input type="password" name="youPass" id="youPass" class="input_write2" maxlength="20"
                                placeholder="비밀번호" autocomplete="off" required></input>
                        </div>
                        <input type="checkbox" name="check" value="check" class="check__box"></input>
                        <span class="SignUp">*Sign me up for emails from VEFY.<a href="join.php"><u>Privacy
                                    Policy</u></a></span>
                        <button type="submit" class="loginSuccess">Have fun with Vefy(login)</button>
                        <div class="loginClose"><u>No Thanks, Continue to website.</u></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div> -->
    <!-- 모달 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- 제이쿼리 소스 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="../assets/js/modernizr.custom.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script>
       

        const sliderWrap = document.querySelector(".slider-wrap");
        const sliderImg = document.querySelector(".slider-img");
        const slider = document.querySelectorAll(".slider");

        let currentIndex = 0;
        let sliderCount = slider.length;

        setInterval(() => {
            let nextIndex = (currentIndex + 1) % sliderCount;

            slider[currentIndex].style.opacity = "0";
            slider[nextIndex].style.opacity = "1";

            currentIndex = nextIndex;
        }, 6000);

        var mHtml = $("html");
        var page = 1;

        mHtml.animate({
            scrollTop: 0
        }, 10);

        window.addEventListener("wheel", function (e) {
            e.preventDefault();
        }, {
            passive: false
        });

        $(window).on("wheel", function (e) {
            if (mHtml.is(":animated")) return;

            if (e.originalEvent.deltaY > 0) {
                if (page == 7) return;

                page++;
            } else if (e.originalEvent.deltaY < 0) {
                if (page == 1) return;

                page--;
            }
            var posTop = (page - 1) * $(window).height();
            mHtml.animate({
                scrollTop: posTop
            }, 1020);
        });

        var swiper1 = new Swiper(".swiper.store", {
            slidesPerView: 3,
            spaceBetween: 20,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            autoplay: {
                delay: 7000,
            }
        });

        let nowScrollTop;
        let lastScrollTop = 10;

        function scrollProgress() {
            nowScrollTop = true;

            setTimeout(() => {
                if (nowScrollTop) {
                    nowScrollTop = false;
                    hasScroll();
                }
            }, 500);
        }

        function hasScroll() {
            let scrollTop = document.documentElement.scrollTop || window.scrollY || window.pageYOffset;

            if (scrollTop >= lastScrollTop) {
                document.querySelector(".banner").classList.add("hide");
            } else {
                document.querySelector(".banner").classList.remove("hide");
            }
            lastScrollTop = scrollTop;
        }

        var x = document.querySelector(".audio");

        function setHalfVolume(){ 
            x.volume = 0.2;
        }
        setHalfVolume();

        window.addEventListener("scroll", scrollProgress);

    </script>
</body>

</html>