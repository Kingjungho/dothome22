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
    <title>게시판</title>
    
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/board.css">
</head>
<body>
    <!-- skipMenu -->
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skipMenu -->

    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

    <!-- contents -->
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">공지사항 컨텐츠</h2>
            <article class="content-article">
                <div class="boardType">
                    <h3>공지사항</h3>
                    <p></p>
                    <div class="board">
                        <div class="board-table mt30">
                            <table>
                                <colgroup>
                                    <col style="width: 15%" />
                                    <col style="width: 85%" />
                                </colgroup>
                                <tbody>
                                    <?php
                                        $qnaID = $_GET['qnaID'];

                                        $sql = "SELECT q.qnaTitle, q.qnaContent, q.qnaView, m.youName, q.regTime FROM myQna q JOIN myMember m ON (q.myMemberID = m.myMemberID) WHERE q.myQnaID = {$qnaID}";
                                        $result = $connect -> query($sql);

                                        $view = "UPDATE myQna SET qnaView = qnaView+1 WHERE myQnaID = {$qnaID}";
                                        $connect -> query($view);

                                        if($result){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<tr><th>제목</th><td class='left'>".$info['qnaTitle']."</td></tr>";
                                            echo "<tr><th>글쓴이</th><td class='left'>".$info['youName']."</td></tr>";
                                            echo "<tr><th>작성일</th><td class='left'>".date('Y-m-d', $info['regTime'])."</td></tr>";
                                            echo "<tr><th>조회수</th><td class='left'>".$info['qnaView']."</td></tr>";
                                            echo "<tr><th class='height'>내용</th><td class='height left'>".$info['qnaContent']."</td></tr>";
                                        }
                                    ?>
                                    <!-- <tr>
                                        <th>제목</th>
                                        <td class="left">안녕</td>
                                    </tr>
                                    <tr>
                                        <th>글쓴이</th>
                                        <td class="left">해피</td>
                                    </tr>
                                    <tr>
                                        <th>작성일</th>
                                        <td class="left">21.09.27</td>
                                    </tr>
                                    <tr>
                                        <th>조회수</th>
                                        <td class="left">2</td>
                                    </tr>
                                    <tr>
                                        <th class="height">내용</th>
                                        <td class="height left">해피해피해피해피</td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <div class="btn">
                                <?php
                                    $qnaID = $_GET['qnaID'];

                                    $sql = "SELECT myMemberID FROM myQna WHERE myQnaID = {$qnaID};";
                                    $result = $connect -> query($sql);

                                    $info = $result -> fetch_array(MYSQLI_ASSOC);

                                    if($info['myMemberID'] == $_SESSION['myMemberID']){
                                ?>

                                <a href="qnaRemove.php?qnaID=<?=$_GET['qnaID']?>" onclick="if(!confirm('정말 삭제하시겠습니까?')){return false;}">삭제하기</a>
                                <a href="qnaModify.php?qnaID=<?=$_GET['qnaID']?>">수정하기</a>
                                <?php
                                    } else {
                                    }
                                ?>
                                <a href="qna.php">목록보기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <!-- footer -->
    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>