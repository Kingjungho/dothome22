<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>로그인</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <!-- skipMenu -->
    <div id="skip">
        <a href="#contents">로그인 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skipMenu -->

    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <!-- contents -->
    <main id="contents">
    <div class="container">
        <div class="loginTitle">로그인</div>
        <form name="login" action="loginSave.php" method="POST">
            <fieldset>
                <legend class="ir_so">로그인 입력</legend>
                <div class="loginWrap">
                    <div class="loginLeft">
                        <div class="loginClick">
                            <div class="login">
                                <div>
                                    <label for="youID"></label>
                                    <input type="text" name="youID" id="youID" class="input_write3" placeholder="아이디" autocomplete="off" autofocus required></input>
                                </div>
                                <div>
                                    <label for="youPass"></label>
                                    <input type="password" name="youPass" id="youPass" class="input_write3" maxlength="20" placeholder="비밀번호" autocomplete="off" required></input>
                                </div>
                            </div>
                        </div>
                        <button id="loginBtn" type="submit" class="btn_submit">로그인</button>
                        <div class="loginSearch">
                            <span class="idSearch"><a href="login_id.php">아이디 찾기</a></span>
                            <span><a href="login_pass.php">비밀번호 찾기</a></span>
                        </div>
                        <div class="vefyLogo"></div>
                    </div>
                    <div class="loginLine"></div>
                    <div class="loginRight">
                        <div class="loginDesc">아직 회원가입 전인가요?</div>
                        <div class="loginDesc2">회원가입을 하시면 다양한 혜택을 받으실 수 있습니다.</div>
                        <button id="joinBtn" type="submit" class="btn_submit"><a href="join.php">회원가입</a></button>
                        <div class="loginImage">
                            <img src="../assets/img/login.png" alt="이미지입니다.">
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
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