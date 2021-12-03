<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP class</title>

    <!-- SEO -->
    <meta name="author" content="webstoryboy" />
    <meta name="description" content="PHP 포트폴리오 사이트입니다." />
    <meta name="keywords" content="PHP, 포트폴리오, 웹표준, 웹접근성, 사이트만들기, 포트폴리오, 웹스토리보이" />
    <meta name="robots" content="all" />

    <!-- 아이콘 -->
    <link rel="icon" href="img/icon_256.png" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="icon" type="image/png" sizes="256x256" href="img/icon_256.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="img/icon_192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon_32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon_16.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/fonts2.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset2.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
</head>
<body>
    <div id="skip">
        <a href="#main">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <article class="content-article">
                <h3>프론트앤드 강의</h3>
                <p>프론트앤드 개발자가 되기 위한 과정에 도움이 될 강의 제공 및 여러가지 정보 등을 서로 공유하는 사이트입니다.<br>
                    홍보 및 광고 게시글 허용X</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="#">
                                <img src="../assets/img/card01.jpg" alt="ㅇㅇ">
                            </a>
                            <div class="item">
                                <strong>프론트앤드 초심자<br> 가이드북 제공</strong>
                                <span>입문자들도 쉽게 보고 따라할 수 있는 수준의 가이드북 입니다.</span>
                                <span class="keyword">
                                    <span>#코린이</span><span>#코딩 초보</span><span>#코딩 입문</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>PC , 모바일 기기 각 1대<br> 연동가능</strong>
                                <span>장소에 구애받지 않고 어디서나 무료로 시청이 가능합니다.</span>
                                <span class="keyword">
                                    <span>#장소 무관</span><span>#언제 어디서나</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>고급 과정까지 심도있게 <br>끝까지 갑니다!</strong>
                                <span>중급 , 고급 , 최고급 과정까지 전문 강사들의 심도있는 강의</span>
                                <span class="keyword">
                                    <span>#프론트앤드 마스터</span><span>#끝판왕</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article">
                <h3 class="ir_so">팀 프로젝트 설명</h3>
                <section class="section-intro container">
                    <h4 class="ir_so">팀 프로젝트 소개</h4>
                    <div class="youtube-intro">
                        <div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/GVTjefFJcPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5>직접 참여한 팀 프로젝트입니다.</h5>
                            <p>팀 프로젝트의 일부 과정을 페이퍼 프로토타입으로 설명해 주는 동영상입니다!!!!</p>
                            <div class="interview">
                                <div class="icon">
                                        <img src="../assets/img/svg-pizza.svg" alt="">
                                        <span>#GaboJa</span>
                                    </a>
                                </div>
                                <div class="icon">   
                                        <img src="../assets/img/svg-bread-egg.svg" alt="">
                                        <span>#준비해</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                        <img src="../assets/img/svg-cherries.svg" alt="">
                                        <span>#포기NO</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                        <img src="../assets/img/svg-pear.svg" alt="">
                                        <span>#힘내</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                        <img src="../assets/img/svg-vanilla-cupcake.svg" alt="">
                                        <span>#화이팅</span>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="content-article content-sub">
                <h3>자바스크립트 강의</h3>
                <p>자바스크립트를 배우는 스크립트 강의입니다.</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list2">                    
                        <li>
                            <a href="#">
                                <img src="../assets/img/card23.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>막막해 하지마세요</strong>
                                <span class="keyword">
                                    <span>#강의</span><span>#선택은 이 곳</span><span>#할 수 있다</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card19.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>프론트앤드 개발자를 하는 이유는?</strong>
                                <span class="keyword">
                                    <span>#프론트앤드</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card18.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>자바스크립트는 꼭 사용해야 합니다.</strong>
                                <span class="keyword">
                                    <span>#글로벌</span><span>#다 씀</span><span>#프론트앤드</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>코딩이 어려워도 괜찮아요!!!</strong>
                                <span class="keyword">
                                    <span>#원래 처음은 힘듦</span><span>#화이팅</span><span>#곧 잘할거야</span>
                                </span>
                            </div>
                        </li>
                       
                    </ul>
                </section>
            </article>
            <article class="flow-article content-sub">
                <h3>최신 소식</h3>
                <p>최신 소식을 바로 확인 할 수 있습니다.</p>
                <section class="section-news container">
                    <div class="news">
                        <h4>게시판 업데이트</h4>
                        <ul>
                        <li><a href='../board/boardView.php?boardID=97'>강의좀요</a><span>2021-10-28</span></li><li><a href='../board/boardView.php?boardID=95'>강의좀 제발</a><span>2021-10-30</span></li><li><a href='../board/boardView.php?boardID=94'>ㅋㅋㅋㅋ0</a><span>2021-10-30</span></li><li><a href='../board/boardView.php?boardID=93'>작성해주세요</a><span>2021-11-15</span></li>
                            <!-- <li><a href="#">스크립트 강의 업데이트 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">유튜브에 강의 업데이트할 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 참여에 대해서 자세히 알려드립니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 강의와 면접 잘 보는 법에 대해서 알려드릴께요~</a><span>2021.02.02</span></li> -->
                        </ul>
                        <a href="../board/board.php" title="더보기" class="more">더보기</a>
                    </div>
                    <div class="news">
                        <h4>댓글 업데이트</h4>
                        <ul>
                        <li><a href="../comment/comment.php?myCommentID=14">사기당한듯</a><span></span>2021-10-22</li>
                                                                <li><a href="../comment/comment.php?myCommentID=13">강의 신청해봤어요</a><span>2021-10-30</span></li>
                                                                <li><a href="../comment/comment.php?myCommentID=12">좀 별론듯 ㅋ</a><span>2021-10-30</span></li>
                                                                <li><a href="../comment/comment.php?myCommentID=11">괜찮 ㅋㅋ</a><span>2021-10-30</span></li>
                        </ul>
                        <a href="../comment/comment.php" title="더보기" class="more">더보기</a>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //main -->

    <footer id="footer">
        <div class="container">
            <section class="section-service">
                <h2 class="ir_so">바로가기 링크</h2>
                <div class="link">
                    <div>
                        <strong>페이지</strong>
                        <ul>
                            <li><a href="main.html">main.html</a></li>
                            <li><a href="comment.html">comment.html</a></li>
                            <li><a href="contact.html">contact.html</a></li>
                        </ul>
                    </div>
                    <div>
                        <strong>로그인</strong>
                        <ul>
                            <li><a href="join.html">join.html</a></li>
                            <li><a href="joinSave.html">joinSave.html</a></li>
                            <li><a href="login.html">login.html</a></li>
                        </ul>
                    </div>
                    <div>
                        <strong>게시판</strong>
                        <ul>
                            <li><a href="board.html">board.html</a></li>
                            <li><a href="boardView.html">boardView.html</a></li>
                            <li><a href="boardWrite.html">boardWrite.html</a></li>
                            <li><a href="boardModify.html">boardModify.html</a></li>
                            <li><a href="boardSearch.html">boardSearch.html</a></li>
                        </ul>
                    </div>
                    <div>
                        <strong>SNS</strong>
                        <ul>
                            <li><a href="#">인플러언서</a></li>
                            <li><a href="#">인스타그램</a></li>
                            <li><a href="#">트위터</a></li>
                            <li><a href="#">페이스북</a></li>
                            <li><a href="#">블로그</a></li>
                        </ul>
                    </div>
                    <div>
                        <strong>사이트</strong>
                        <ul>
                            <li><a href="https://webzz.tistory.com/" target="_blank">레퍼런스</a></li>
                            <li><a href="https://wtss.tistory.com/" target="_blank">튜토리얼</a></li>
                            <li><a href="https://wess.tistory.com/" target="_blank">웹 폰트</a></li>
                            <li><a href="https://wsss.tistory.com/" target="_blank">애니메이션</a></li>
                            <li><a href="https://cafe.naver.com/crossbrowsing" target="_blank">스터디 신청</a></li>
                        </ul>
                    </div>
                </div>
                <div class="info">
                    <ul>
                        <li>Contact</li>
                        <li>dkdlwo@naver.com</li>
                        <li>KaKao</li>
                        <li>dkdlwo</li>
                        <li>Phone</li>
                        <li>010-9755-0864</li>
                    </ul>
                </div>
            </section>
            <section class="section-info">
                <h2 class="ir_so">서비스 이용정도</h2>
                <address>&copy;KIMJUNGHO. All rights reserved.</address>
            </section>
        </div>
        <a href="#" class="link_top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="ico_top">
                <g fill="none" fill-rule="evenodd">
                    <circle cx="25" cy="25" r="25" fill="black"></circle> 
                    <path stroke-width="1.5" class="stroke" stroke="white" d="M8.467 16.933L0 8.467 8.467 0M.085 8.467L19.918 8.534" transform="rotate(90 9.5 24)"></path>
                </g>
            </svg>
        </a>
    </footer>
    <!-- //footer -->
</body>
</html>