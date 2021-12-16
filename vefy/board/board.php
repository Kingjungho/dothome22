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
    <title>board</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="/assets/css/board.css">
</head>
<body style="height: auto;">
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

    <div class="banner_wrap">
        <div class="bgImg"
        data-0="top: 50%;"
        data-500="top: 30%;"
        >
            <img src="../assets/img/remain.jpeg" alt="이미지">
        </div>
        <div class="bgBox">
            <p>자유롭게 글을 작성하세요</p>
            <h1>Community</h1>
            <span>What's on your mind?</span>
        </div>
    </div>

    <div class="community">
        <div class="container">
            <div class="commu-wrap">
                <h2>community</h2>
                <form action="boardSearch.php" name="boardSearch" method="get">
                    <fieldset class="search-field">
                        <legend class="ir_so">게시판 검색 영역</legend>
                        <div class="search_box">
                            <input type="search" name="searchKeyword" class="form-search" placeholder="검색어를 입력하세요!" aria-label="search" size=30 required>
                            <select name="searchOption" id="searchOption" class="form-select">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">작성자</option>
                                <option value="view">조회수</option>
                            </select>
                            <button type="submit" class="form-btn">검색</button>
                        </div>
                    </fieldset>
                </form>
                <div class="box_wrap">
                    <!-- <div class="cm_box cm_box1">
                        <span class="icon icon1">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_box cm_box2">
                        <span class="icon icon2">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_box cm_box3">
                        <span class="icon icon3">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>          
                    <div class="cm_box cm_box1">
                        <span class="icon icon1">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_box cm_box2">
                        <span class="icon icon2">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_box cm_box3">
                        <span class="icon icon3">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>          
                    <div class="cm_box cm_box1">
                        <span class="icon icon1">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean diam dolor, accumsan sed et.</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_box cm_box2">
                        <span class="icon icon2">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean diam dolor, accumsan sed et.</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_box cm_box3">
                        <span class="icon icon3">
                            <img src="../assets/img/message_circle.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean diam dolor, accumsan sed et.</p>
                        <button>보러가기</button>
                    </div> -->
                    <?php
                        if(isset($_GET['page'])){
                            $page = (int) $_GET['page'];
                        } else {
                            $page = 1;
                        }

                        $numView = 9;
                        $viewLimit = ($numView * $page) - $numView;

                        //1~20 : DESC LIMIT   0, 20     --> $page = 1   ($numView * $page) - $numView
                        //21~40 : DESC LIMIT 20, 20     --> $page = 2   ($numView * $page) - $numView
                        //41~60 : DESC LIMIT 40, 20     --> $page = 3   ($numView * $page) - $numView
                        //61~80 : DESC LIMIT 60, 20     --> $page = 4   ($numView * $page) - $numView
                        //81~100 : DESC LIMIT 80, 20    --> $page = 5   ($numView * $page) - $numView


                        $boardTime = $board['date'];
                        $boardTime = date('Y-m-d');

                        if($boardTime == $boardTime){
                            $img = "<img src='../assets/img/new.png' alt='new' title='new'>";
                        } else {
                            $img = "";
                        }

                        //board + member join
                        $sql = "SELECT b.myBoardID, b.boardTitle, m.youName, b.boardView, b.regTime FROM myMember m JOIN myBoard b ON (m.myMemberID = b.myMemberID) ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$numView}";                                            
                        $result = $connect -> query($sql);

                        if($result){
                            $count = $result -> num_rows;

                            if($count > 0){
                                for($i=1; $i<=$count; $i++){
                                    $info = $result -> fetch_array(MYSQLI_ASSOC);
                                    echo "<div class='cm_box cm_box$i'>";
                                    echo "<span class='icon icon$i'>";
                                    echo "<img src='../assets/img/message_circle.png' alt='icon'>";
                                    echo "</span>";
                                    echo "<h3>".$info['boardTitle']."</a></h3>";
                                    echo "<p>".$info['youName']."</p>";
                                    echo "<div class='cm_view'>".date('Y-m-d', $info['regTime'])."</div>";
                                    echo "<button><a href='boardView.php?boardID={$info['myBoardID']}'>보러가기</a></button>";
                                    echo "</div>";
                                    // echo "<td><a href='boardView.php?boardID={$info['myBoardID']}'>".$info['boardTitle']."</a></td>";
                                    // echo "<td>".$info['youName']."</td>";
                                    // echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                                    // echo "<td>".$info['boardView']."</td>";
                                    // echo "</tr>";
                                    // echo "시작이 양수인 경우 #6  : ".mb_substr($example_english, -3, -1, SERVER_CHARSET).'<br/>';
                                }
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="wirte-btn">
                <a href="boardWrite.php" class="form-btn black">글쓰기</a>
            </div>
        </div>

        <div class="pageList">
            <ul>
                <?php
                    $sql = "SELECT count(myBoardID) FROM myBoard";
                    $result = $connect -> query($sql);

                    $boardTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
                    $boardTatalCount = $boardTotalCount['count(myBoardID)'];

                    // echo "전체 갯수 : " .$boardTatalCount;

                    // 총 페이지 수
                    $boardTatalPage = ceil($boardTatalCount/$numView);

                    // echo "총 페이지 수 : " .$boardTatalPage;

                    // 1 2 3 4 5 6 7 8 9 10 11
                    // 현재 페이지를 기준으로 보여주고 싶은 갯수
                    $pageView = 5;
                    $startPage = $page - $pageView;
                    $endPage = $page + $pageView;

                    // 처음 페이지 초기화
                    if($startPage < 1) $startPage = 1;
                    
                    // 마지막 페이지 초기화
                    if($endPage >= $boardTatalPage) $endPage = $boardTatalPage;
                    
                    // 처음으로
                    if($page != 1){
                        echo "<li><a href='board.php?page=1'>first</a></li>";
                    }

                    // 이전 페이지
                    if($page != 1){
                        $prevPage = $page - 1;
                        echo "<li><a href='board.php?page={$prevPage}'>prev</a></li>";
                    }

                    for($i=$startPage; $i<=$endPage; $i++){
                        $active = "";
                        if($i == $page) $active = "active";
                        echo "<li class='{$active}'><a href='board.php?page={$i}'>{$i}</a></li>";
                    };

                    // 다음 페이지
                    if($page != $endPage){
                        $nextPage = $page + 1;
                        echo "<li><a href='board.php?page={$nextPage}'>next</a></li>";
                    }

                    // 마지막으로
                    if($page != $endPage){
                        echo "<li><a href='board.php?page={$boardTatalPage}'>last</a></li>";
                    }
                ?>        
            </ul>
        </div>
    </div>


    <footer id="footer">
        <?php
            include "../include/footer.php"
        ?>
    </footer>
    <!-- //footer -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- 제이쿼리 소스 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="../assets/js/modernizr.custom.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
    <script>
        var s = skrollr.init();
    </script>
</body>
</html>