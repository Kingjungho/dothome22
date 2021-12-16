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
    <title>Recipe</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="/assets/css/board.css">
</head>
<body>
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

    <div class="banner_wrap recipe">
        <div class="bgImg recipe"
        data-0="top: 50%;"
        data-500="top: 30%;"
        >
            <img src="../assets/img/remain2.jpeg" alt="이미지">
        </div>
        <div class="bgBox recipe">
            <p>여러분의 레시피를 공유해주세요</p>
            <h1>Recipe</h1>
            <span>Tell me your own recipe and various information and share it.</span>
        </div>
    </div>

    <div class="community recipe">
        <div class="container">
            <div class="commu-wrap">
                <h2>Recipe</h2>
                <form action="boardRecipeSearch.php" name="boardRecipeSearch" method="get">
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
                    <!-- <div class="cm_boxr cm_box1 recipe">
                        <span class="icon icon1">
                            <img src="../assets/img/cupcake.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_boxr cm_box2 recipe">
                        <span class="icon icon2">
                            <img src="../assets/img/cupcake.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_boxr cm_box3 recipe">
                        <span class="icon icon3">
                            <img src="../assets/img/cupcake.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>          
                    <div class="cm_boxr cm_box1 recipe">
                        <span class="icon icon1">
                            <img src="../assets/img/cupcake.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_boxr cm_box2 recipe">
                        <span class="icon icon2">
                            <img src="../assets/img/cupcake.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_boxr cm_box3 recipe">
                        <span class="icon icon3">
                            <img src="../assets/img/cupcake.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>게시글 미리보기 영역</p>
                        <button>보러가기</button>
                    </div>          
                    <div class="cm_boxr cm_box1 recipe">
                        <span class="icon icon1">
                            <img src="../assets/img/cupcake.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean diam dolor, accumsan sed et.</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_boxr cm_box2 recipe">
                        <span class="icon icon2">
                            <img src="../assets/img/cupcake.png" alt="icon">
                        </span>
                        <h3>제목영역</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean diam dolor, accumsan sed et.</p>
                        <button>보러가기</button>
                    </div>
                    <div class="cm_boxr cm_box3 recipe">
                        <span class="icon icon3">
                            <img src="../assets/img/cupcake.png" alt="icon">
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
                        $sql = "SELECT r.myRecipeID, r.RecipeTitle, m.youName, r.RecipeView, r.regTime FROM myMember m JOIN myRecipe r ON (m.myMemberID = r.myMemberID) ORDER BY myRecipeID DESC LIMIT {$viewLimit}, {$numView}";                                            
                        $result = $connect -> query($sql);


                        if($result){
                            $count = $result -> num_rows;

                            if($count > 0){
                                for($i=1; $i<=$count; $i++){
                                    $info = $result -> fetch_array(MYSQLI_ASSOC);
                                    echo "<div class='cm_boxr cm_box$i'>";
                                    echo "<span class='icon icon$i'>";
                                    echo "<img src='../assets/img/cupcake.png' alt='icon'>";
                                    echo "</span>";
                                    echo "<h3>".$info['RecipeTitle']."</a></h3>";
                                    echo "<p>".$info['youName']."</p>";
                                    echo "<div class='cm_view'>".date('Y-m-d', $info['regTime'])."</div>";
                                    echo "<button><a href='boardRecipeView.php?RecipeID={$info['myRecipeID']}'>보러가기</a></button>";
                                    echo "</div>";
                                }
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="wirte-btn">
                <a href="boardRecipeWirte.php" class="form-btn black recipe">글쓰기</a>
            </div>
        </div>
        
        <div class="pageList recipe">
            <ul>
                <?php
                    $sql = "SELECT count(myRecipeID) FROM myRecipe";
                    $result = $connect -> query($sql);

                    $recipeTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
                    $recipeTatalCount = $recipeTotalCount['count(myRecipeID)'];

                    // echo "전체 갯수 : " .$recipeTatalCount;

                    // 총 페이지 수
                    $recipeTatalPage = ceil($recipeTatalCount/$numView);

                    // echo "총 페이지 수 : " .$recipeTatalPage;

                    // 1 2 3 4 5 6 7 8 9 10 11
                    // 현재 페이지를 기준으로 보여주고 싶은 갯수
                    $pageView = 5;
                    $startPage = $page - $pageView;
                    $endPage = $page + $pageView;

                    // 처음 페이지 초기화
                    if($startPage < 1) $startPage = 1;
                    
                    // 마지막 페이지 초기화
                    if($endPage >= $recipeTatalPage) $endPage = $recipeTatalPage;
                    
                    // 처음으로
                    if($page != 1){
                        echo "<li><a href='boardRecipe.php?page=1'>first</a></li>";
                    }

                    // 이전 페이지
                    if($page != 1){
                        $prevPage = $page - 1;
                        echo "<li><a href='boardRecipe.php?page={$prevPage}'>prev</a></li>";
                    }

                    for($i=$startPage; $i<=$endPage; $i++){
                        $active = "";
                        if($i == $page) $active = "active";
                        echo "<li class='{$active}'><a href='boardRecipe.php?page={$i}'>{$i}</a></li>";
                    };

                    // 다음 페이지
                    if($page != $endPage){
                        $nextPage = $page + 1;
                        echo "<li><a href='boardRecipe.php?page={$nextPage}'>next</a></li>";
                    }

                    // 마지막으로
                    if($page != $endPage){
                        echo "<li><a href='boardRecipe.php?page={$recipeTatalPage}'>last</a></li>";
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