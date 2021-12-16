<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
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
    <title>검색 결과</title>
    
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/board.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

        <main id="contents">
            <section id="mainCont">
                <h2 class="ir_so">메인 컨텐츠</h2>
                <article class="content-article">
                    <div class="boardType">
                        <h3>검색 결과</h3>

                        <?php
                            $searchKeyword = $_GET['searchKeyword'];
                            $searchOption = $_GET['searchOption'];

                            // echo $searchKeyword, $searchOption;

                            if($searchKeyword == '' || $searchKeyword == null){
                                echo "<p>검색어가 없습니다.</p>";
                            }
                        ?>

                        <div class="board mt20">
                            <div class="board-table">
                                <table>
                                    <colgroup>
                                        <col style="width: 5%" />
                                        <col />
                                        <col style="width: 10%" />
                                        <col style="width: 12%" />
                                        <col style="width: 7%" />
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>제목</th>
                                            <th>등록자</th>
                                            <th>등록일</th>
                                            <th>조회수</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(isset($_GET['page'])){
                                                $page = (int) $_GET['page'];
                                            } else {
                                                $page = 1;
                                            }

                                            $numView = 10;
                                            $viweLimit = ($numView * $page) - $numView;

                                            $searchKeyword = $connect -> real_escape_string($searchKeyword);
                                            $searchOption = $connect -> real_escape_string($searchOption);

                                            // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID) WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                            // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID) WHERE b.boardContent LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                            // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID) WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";

                                            $sql = "SELECT r.myRecipeID, r.RecipeTitle, r.RecipeContent, r.RecipeView, m.youName, r.regTime FROM myRecipe r JOIN myMember m ON (m.myMemberID = r.myMemberID) ";

                                            switch($searchOption){
                                                case 'title':
                                                    $sql .= "WHERE r.RecipeTitle LIKE '%{$searchKeyword}%' ORDER BY myRecipeID DESC LIMIT 10";
                                                    break;
                                                case 'content':
                                                    $sql .= " WHERE r.RecipeContent LIKE '%{$searchKeyword}%' ORDER BY myRecipeID DESC LIMIT 10";
                                                    break;
                                                case 'name':
                                                    $sql .= " WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY myRecipeID DESC LIMIT 10";
                                                    break;
                                            }
                                            
                                            // echo $sql;
                                            $result = $connect -> query($sql);

                                            if($result){
                                                $count = $result -> num_rows;

                                                if($count > 0){
                                                    for($i=1; $i<=$count; $i++){
                                                        $info = $result -> fetch_array(MYSQLI_ASSOC);
                                                        echo "<tr>";
                                                        echo "<td>".$info['myRecipeID']."</td>";
                                                        echo "<td><a href='boardView.php?boardID={$info['myRecipeID']}'>".$info['RecipeTitle']."</a></td>";
                                                        echo "<td>".$info['youName']."</td>";
                                                        echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                                                        echo "<td>".$info['RecipeView']."</td>";
                                                        echo "</tr>";
                                                    }
                                                }

                                                echo "<p class=search-gun>총 '<span class=red>".$count. "</span>'건이 검색되었습니다.</p>";
                                                echo "<p class=search-word>검색어 : '<span class=red>" .$searchKeyword. "</span>' 검색 결과입니다.</p>";
                                            }
                                        ?>
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="wirte-btn">
                                <a href="boardRecipe.php" class="form-btn black">목록 돌아가기</a>
                            </div>
                            <div class="pageList">
                                <ul>
                                    <?php
                                        $sql = "SELECT count(myRecipeID) FROM myRecipe";
                                        $result = $connect -> query($sql);

                                        $boardTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
                                        $boardTatalCount = $boardTotalCount['count(myRecipeID)'];

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
                                            echo "<li><a href='boardRecipeSearch.php?page=1'>first</a></li>";
                                        }

                                        // 이전 페이지
                                        if($page != 1){
                                            $prevPage = $page - 1;
                                            echo "<li><a href='boardRecipeSearch.php?page={$prevPage}'>prev</a></li>";
                                        }

                                        for($i=$startPage; $i<=$endPage; $i++){
                                            $active = "";
                                            if($i == $page) $active = "active";
                                            echo "<li class='{$active}'><a href='boardRecipeSearch.php?page={$i}'>{$i}</a></li>";
                                        };

                                        // 다음 페이지
                                        if($page != $endPage){
                                            $nextPage = $page + 1;
                                            echo "<li><a href='boardRecipeSearch.php?page={$nextPage}'>next</a></li>";
                                        }

                                        // 마지막으로
                                        if($page != $endPage){
                                            echo "<li><a href='boardRecipeSearch.php?page={$boardTatalPage}'>last</a></li>";
                                        }
                                    ?>        

                                    <!-- <li><a href="#">처음으로</a></li>
                                    <li><a href="#">&#129044;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">&#129046;</a></li>
                                    <li><a href="#">마지막으로</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </main>
        <!-- //content -->

        <footer id="footer">
            footer
        </footer>
        <!-- //footer -->
    </div>
    <!-- //wrap -->
</body>
</html>