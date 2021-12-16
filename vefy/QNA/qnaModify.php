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
    <title>게시판 수정</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/board.css">

    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/board.css">

    <!-- CKEditor4 -->
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        //<![CDATA[ 
            function LoadPage() { 
                CKEDITOR.replace('qnaContent'); 
            }

            function FormSubmit(f) { 
                CKEDITOR.instances.contents.updateElement(); 
                if(f.contents.value == "") { 
                    alert("내용을 입력해 주세요."); 
                    return false; 
                } 
                alert(f.contents.value); 
                // 전송은 하지 않습니다. 
                return false; 
            } 
        //]]> 
    </script>
</head>
<body onload="LoadPage();">
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
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <div class="boardType">
                    <h3>수정하기</h3>
                    <p>Q&A의 제목과 내용을 수정할 수 있습니다.</p>

                    <section class="boardModify">
                        <form action="qnaModifySave.php" name="qnaModify" method="post">
                            <fieldset>
                                <legend class="ir_so">QNA 수정 영역입니다.</legend>

                                <?php
                                    $qnaID = $_GET['qnaID'];
                                    // echo $boardID;

                                    $sql = "SELECT q.qnaTitle, q.qnaContent, m.youName FROM myQna q JOIN myMember m ON (q.myMemberID = m.myMemberID) WHERE q.myQnaID = {$qnaID}";
                                    $result = $connect -> query($sql);

                                    if($result){
                                        $info = $result -> fetch_array(MYSQLI_ASSOC);

                                        echo "<div style='display:none'><label for='qnaID'>번호</label>";
                                        echo "<input type='text' name='qnaID' id='qnaID' value='".$_GET['qnaID']."'></div>";
                                        echo "<div><label for='qnaTitle'>제목</label>";
                                        echo "<input type='text' name='qnaTitle' id='qnaTitle' value='".$info['qnaTitle']."'></div>";
                                        echo "<div><label for='qnaContent'>내용</label>";
                                        echo "<textarea name='qnaContent' id='qnaContent' rows='13'>".$info['qnaContent']."</textarea></div>";
                                        echo "<div><label for='qnaPass' class='passModify'>비밀번호</label>";
                                        echo "<input type='password' name='qnaPass' id='qnaPass' placeholder='로그인 비밀번호를 입력해주세요!' autocomplete='off' required></div>";
                                    }
                                ?>

                                <!-- <div>
                                    <label for="boardID">번호</label>
                                    <input type="text" name="boardID" id="boardID">
                                </div>
                                <div>
                                    <label for="boardTitle">제목</label>
                                    <input type="text" name="boardTitle" id="boardTitle" class="title-text">
                                </div>
                                <div>
                                    <label for="boardContent">내용</label>
                                    <textarea name="boardContent" id="boardContent" rows="13"></textarea>
                                </div>
                                <div>
                                    <label for="boardPass">비밀번호</label>
                                    <input type="password" name="boardPass" id="boardPass" placeholder="로그인 비밀번호를 입력해주세요!" autocomplete="off" required>
                                </div> -->
                            </fieldset>
                            <button class="btn" type="submit" value="저장하기">저장하기</button>
                        </form>
                    </section>
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