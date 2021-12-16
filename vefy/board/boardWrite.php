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
    <title>게시판 작성</title>

    
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/board.css">

    <!-- CKEditor4 -->
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        //<![CDATA[ 
            function LoadPage() { 
                CKEDITOR.replace('boardContent'); 
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
                        <h3>자유게시판 글쓰기</h3>
                        <p class="sub_text">자유로운 글을 써주세요~</p>
                        <div class="board-write">
                            <form action="boardWriteSave.php" name="boardWrite" method="post">
                                <fieldset>
                                    <legend class="ir_so">게시판 글쓰기 영역입니다</legend>
                                    <div>
                                        <label for="boardTitle">제목</label>
                                        <input type="text" id="boardTitle" name="boardTitle" class="title-text" placeholder="제목을 입력해주세요" required autofocus>
                                    </div>
                                    <div>
                                        <label for="boardContent">내용</label>
                                        <textarea name="boardContent" id="boardContent content" rows="60" class="title-text content" placeholder="내용을 입력해주세요" required></textarea>
                                    </div>
                                </fieldset>
                                <button class="board-btn" type="submit" value="저장하기">저장하기</button>
                            </form>
                        </div>
                    </div>
                </article>
            </section>
        </main>
        <!-- //content -->
    </div>
    <!-- //wrap -->

    
    <footer id="footer">
        <?php
            include "../include/footer.php"
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>