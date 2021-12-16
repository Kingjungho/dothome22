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
    <title>지도</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/map.css">
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
        <div id="menu_wrap" class="bg_white">
            <div class="text">
                <h4>Map</h4>
                <p>채식 맛집 검색해서 맛있게 먹어봐요!</p>
            </div>
            <div class="option">
                <div>
                    <form class="map_form" onsubmit="searchPlaces(); return false;">
                        <input class="search_map" type="text" value="" id="keyword" size="35" placeholder="검색어를 입력해 주세요.">
                        <button class="map_btn22" onclick="btn(); return false;" type="submit">검색하기</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="map__wrap">
            <div id="map" class="vefy_map">
                <!-- <img src="../assets/img/지도.jpg" alt="이미지">
                <div class="vefy_map_location"><img src="../assets/img/베피 영등포 분점.png" alt="베피 영등포 분점"></div>
                <div class="vefy_map_location2"><img src="../assets/img/베피 본점.png" alt="베피 본점"></div>
                <div class="vefy_map_location3"><img src="../assets/img/베피 안양 분점.png" alt="베피 안양 분점"></div> -->


            </div>
            <div class="search_mapp">
                <ul id="placesList"></ul>
                <div id="pagination"></div>
            </div>
        </div>
        <!-- <div class="vefy_desc_Wrap">
            <div class="vefy_desc">
                <div class="vefy_adress">베피 본점</div>
                <div class="vefy_adress2">주소 : 경기 안산시 단원구 고잔2길 45 6층</div>
                <div class="vefy_adress3">매장영업시간: 월 ~ 금 : 09 : 00 ~ 21 : 00, 토,일 : 10 : 00 ~ 19 : 00</div>
                <div class="vefy_call">
                    <img src="http://www.saladykorea.com/superboard/skin/company/basic/images/ico-tel.gif">Tel : 031 - 365 - 5008</div>
            </div>
            <div class="vefy_desc">
                <div class="vefy_adress">베피 영등포 분점</div>
                <div class="vefy_adress2">주소 : 서울특별시 영등포구 xxx xxx xxx</div>
                <div class="vefy_adress3">매장영업시간: 월 ~ 금 : 09 : 00 ~ 21 : 00, 토,일 : 10 : 00 ~ 19 : 00</div>
                <div class="vefy_call"><img src="http://www.saladykorea.com/superboard/skin/company/basic/images/ico-tel.gif">Tel : 02 - xxx - xxxx</div>
            </div>
            <div class="vefy_desc">
                <div class="vefy_adress">베피 안양 분점</div>
                <div class="vefy_adress2">주소 : 경기도 안양시 xxx xxx xxx</div>
                <div class="vefy_adress3">매장영업시간: 월 ~ 금 : 09 : 00 ~ 21 : 00, 토,일 : 10 : 00 ~ 19 : 00</div>
                <div class="vefy_call"><img src="http://www.saladykorea.com/superboard/skin/company/basic/images/ico-tel.gif">Tel : 032 - xxx - xxxx</div>
            </div>
        </div>
        <div class="vefy_location">
            <div class="location">베피 본점</div>
            <div class="location">베피 영등포 분점</div>
            <div class="location">베피 안양 분점</div>
        </div> -->
        <div class="restaurant">
            <h2>지역별 맛집</h2>
            <p>베피가 선정한 맛집에서 함께해요~ <br> 지역을 누른후 맛집을 클릭해주세요~</p>
            <div class="restaurantList">
                <span class="active" onclick="setCenter1()">서울</span>
                <span onclick="setCenter2()">경기</span>
                <span onclick="setCenter3()">강원</span>
                <span onclick="setCenter4()">대구</span>
                <span onclick="setCenter5()">부산</span>
                <span onclick="setCenter6()">제주</span>
            </div>
            <div class="restaurantLocation">
                <div class="restaurantLocationWrap">
                    <div class="LocationWrap">
                        <div onclick="panTo1_1()">1.띵크비건(양식) - 서울특별시 마포구 월드컵로13길 55</div>
                        <div onclick="panTo1_2()">2.마히나 비건 테이블(이탈리아 음식) - 서울특별시 강남구 논현로175길 75 2층</div>
                        <div onclick="panTo1_3()">3.비건헤븐(양식) - 서울특별시 강동구 성안로 41</div>
                        <div onclick="panTo1_4()">4.해밀 비건베이커리(베이커리) - 서울특별시 마포구 동교로19길 101 1층</div>
                        <div onclick="panTo1_5()">5.라페름(브런치) - 서울 용산구 이태원로54길 32</div>
                        <div onclick="panTo1_6()">6.알라보(샐러드) - 서울특별시 강남구 테헤란로 129 강남N타워 1층</div>
                        <div onclick="panTo1_7()">7.칙피스(샐러드) - 서울특별시 강남구 강남대로152길 69</div>
                    </div>
                </div>
            </div>
            <div class="restaurantLocation">
                <div class="restaurantLocationWrap">
                    <div class="LocationWrap">
                        <div onclick="panTo2_1()">1. 베지앙(카페) - 경기 파주시 맨드라미길 20</div>
                        <div onclick="panTo2_2()">2. 몽가타(와인) - 경기도 군포시 산본로323번길 16-12 센타빌딩B </div>
                        <div onclick="panTo2_3()">3. 에티컬테이블(일식) - 경기도 성남시 수정구 복정로 57</div>
                        <div onclick="panTo2_4()">4. 오무오무(베이커리) - 경기 고양시 일산동구 일산로380번길 35-1</div>
                        <div onclick="panTo2_5()">5. 리스토란테라일락(양식) - 경기도 수원시 팔달구 신풍로23번길 38-8</div>
                        <div onclick="panTo2_6()">6. 채식공간 녹두(샐러드 뷔페) - 경기도 파주시 산남로107번길 35-35</div>
                    </div>
                </div>
            </div>
            <div class="restaurantLocation">
                <div class="restaurantLocationWrap">
                    <div class="LocationWrap">
                        <div onclick="panTo3_1()">1. 범바우막국수(채식메뉴) - 강원 양양군 강현면 동해대로 3277-22</div>
                        <div onclick="panTo3_2()">2. 에이플(카페) - 강원 영월군 영월읍 덕포시장길 9</div>
                        <div onclick="panTo3_3()">3. 달래촌 - 강원 양양군 현남면 화상천로 634</div>
                        <div onclick="panTo3_4()">4. 쁘아송다브릴(한식) - 강원 고성군 간성읍 간성로 73</div>
                        <div onclick="panTo3_5()">5. 루루흐(카페) - 강원 속초시 만천1길 38 1층</div>
                    </div>
                </div>
            </div>
            <div class="restaurantLocation">
                <div class="restaurantLocationWrap">
                    <div class="LocationWrap">
                        <div onclick="panTo4_1()">1. 러빙헛 로데오점(채식메뉴) - 대구광역시 수성구 범어동 96-1</div>
                        <div onclick="panTo4_2()">2. 세상을여는사랑(채식메뉴) - 대구광역시 남구 대명동 1733-6번지</div>
                        <div onclick="panTo4_3()">3. 갓샐러드 칠곡점(카페) - 대구광역시 북구 동천동 동천로 125-8</div>
                        <div onclick="panTo4_4()">4. 바라지레스토랑(체식 레스토랑) - 대구광역시 중구 동성로1가 동성로 73</div>
                        <div onclick="panTo4_5()">5. 산채식당점(한식) - 대구광역시 동구 용수동 70-4</div>
                    </div>
                </div>
            </div>
            <div class="restaurantLocation">
                <div class="restaurantLocationWrap">
                    <div class="LocationWrap">
                        <div onclick="panTo5_1()">1. 베지나랑 2호점(채식 레스토랑) - 부산광역시 수영구 민락동 광안해변로370번길 9-32</div>
                        <div onclick="panTo5_2()">2. 나유타카페(카페) - 부산광역시 금정구 장전동 수림로61번길 53</div>
                        <div onclick="panTo5_3()">3. 다전(채식 레스토랑) - 부산광역시 부산진구 부전2동 신천대로62번길 61</div>
                        <div onclick="panTo5_4()">4. 에코토피아(채식 전문식당) - 부산광역시 수영구 남천동 수영로408번길 30-6</div>
                        <div onclick="panTo5_5()">5. 채식식당(채식메뉴) - 부산광역시 부산진구 부전동 397-44</div>
                    </div>
                </div>
            </div>
            <div class="restaurantLocation">
                <div class="restaurantLocationWrap">
                    <div class="LocationWrap">
                        <div onclick="panTo6_1()">1. 작은부엌(채식 전문식당) - 제주특별자치도 제주시 조천읍 선흘동2길 1</div>
                        <div onclick="panTo6_2()">2. 밥이보약(한식당) - 제주특별자치도 제주시 노형동 1296-3</div>
                        <div onclick="panTo6_3()">3. 다소니(전통 찻집) - 제주특별자치도 제주시 오라일동 오남로6길 24</div>
                        <div onclick="panTo6_4()">4. 카페 901(카페) - 제주특별자치도 제주시 노형동 288-39</div>
                        <div onclick="panTo6_5()">5. 채식식당 푸른솔맑은향(채식메뉴) - 제주특별자치도 제주시 노형동 1621</div>
                        <div onclick="panTo6_6()">6. 숲속의도토리(채식메뉴) - 제주특별자치도 제주시 외도일동 도근내길 18</div>
                        <div onclick="panTo6_7()">7. And 유 (Yu) Café(채식 레스토랑) - 518 Hallim-ro 한림읍 Jeju-si Jeju-do KR</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer id="footer">
        <?php
        include "../include/footer.php";
    ?>
    </footer>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript"
        src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c281c269eaf3a50b4355bad3cbd27761&libraries=services"></script>
    <script src="../assets/js/map.js"></script>
    <script>
        // 탭메뉴
        const tabLocation = document.querySelectorAll(".restaurantList > span");
        const tabDesc = document.querySelectorAll(".restaurantLocation");
        const tabSearch = document.querySelector(".map_btn22");
        const tabSearchMap = document.querySelector(".search_mapp");

        tabDesc[0].style.display = "block"
        tabLocation.forEach((element, index) => {
            element.addEventListener("click", function () {

                tabLocation.forEach(el => {
                    el.classList.remove("active")
                });
                element.classList.add("active")

                tabDesc.forEach(el => {
                    el.style.display = "none";
                })
                tabDesc[index].style.display = "block";
                
            })
        });
                
    </script>
</body>

</html>