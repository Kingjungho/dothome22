<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>로그인 모달</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/loginModal.css">
</head>

<body>
    <div class="modalOverlay">
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
    </div>
    </div>
</body>

<script>
            let signIn = document.querySelector(".signIn");
            let overlay = document.querySelector(".modalOverlay");
            let modalClose = document.querySelector(".loginClose");

            function modalOn(){
                modal.classList.add("active")
            }
            function modalOff(){
                modal.classList.remove("active")
            }
            signIn.addEventListener("click", modalOn);
            overlay.addEventListener("click", modalOff);
            modalClose.addEventListener("click", modalOff);
</script>
</html>