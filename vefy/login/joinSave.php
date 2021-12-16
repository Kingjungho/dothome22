<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>회원가입</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/joinSave.css">
    <link rel="stylesheet" href="../assets/css/join.css">

    
</head>
<body>

<div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <!-- //header -->
    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="contents">
        <section id="mainCont" class="gray">
            <h2 class="ir_so">회원가입 컨텐츠</h2>
            <article class="content-article">
                <div class="member-form">
                    <h3>안내</h3>
                    <?php
                    include "../connect/connect.php";

                    $youID = $_POST['youID'];
                    $youPass = $_POST['youPass'];
                    $youPassC = $_POST['youPassC'];
                    $youName = $_POST['youName'];
                    $youPhone = $_POST['youPhone'];
                    $youEmail = $_POST['youEmail'];
                    $regTime = time();

                    // echo $youEmail, $youPass, $youPassC, $youName, $youBirth, $youPhone;

                    // $sql = "INSERT INTO myMember(youEmail, youPass, youName, youBirth, youPhone, regTime) VALUES('$youEmail', '$youPass', '$youName', '$youBirth', '$youPhone', '$regTime')";

                    // $result = $connect -> query($sql);

                    // if($result){
                    //     echo "INSERT INTO true";
                    // } else {
                    //     echo "INSERT INTO false";
                    // }


                    //메세지 출력
                    function msg($alert){
                        echo "<p class ='alert'>{$alert}</p>";
                    }

                    

                    //입력 유효성 검사
                    //    if($youPass == null || $youPass == ''){
                    //     msg("비밀번호를 입력해주세요."); 
                    //     exit;  
                    // }
                    // if($youPassC == null || $youPassC == ''){
                    //     msg("확인 비밀번호를 입력해주세요.");  
                    //     exit;  
                    // }
                    // if($youName == null || $youName == ''){
                    //     msg("이름을 입력해주세요.");   
                    //     exit;  
                    // }
                    // if($youBirth == null || $youBirth == ''){
                    //     msg("생년월일을 입력해주세요.");   
                    //     exit;  
                    // }
                    // if($youPhone == null || $youPhone == ''){
                    //     msg("생년월일을 입력해주세요.");   
                    //     exit;  
                    // }
                    //유효성 검사
                    //이메일 검사 : 정규식 표현
                    // $check_email = preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $youEmail);

                    // if($check_email == false){
                    //     echo "이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요.";
                    // }

                    //이메일 검사 : 내장 함수 : php 자체 검사

                    // var_dump(filter_var('smaple@naver.com', FILTER_VALIDATE_EMAIL));

                    // 아이디 검사
                    $check_id = preg_match("/^[0-9a-zA-Z]{3,20}$/", $youID);
                    // $check_id = filter_var($youID, FILTER_VALIDATE_EMAIL);

                    if($check_id == false){
                        msg("아이디가 정확하지 않습니다. <br> 다시 한번 확인해주세요.");
                        exit;
                    }

                    //비밀번호 검사 
                    if($youPass !== $youPassC){
                        msg("비밀번호가 일치하지 않습니다. <br> 다시 한번 확인해주세요.");
                        exit;
                    }


                    //비밀번호 암호화
                    // $youPass = sha1($youPass);

                    //이름 검사
                    $check_name = preg_match("/^[가-힣]{1,}$/", $youName);

                    if($check_name == false){
                        msg("이름이 정확하지 않습니다. <br> 한글로만 적어주세요.");
                        exit;
                    }
                    
                    //휴대폰 번호 검사
                    $check_number = preg_match("/^(010|011|016|017|018|019)-[0-9]{3,4}-[0-9]{4}$/", $youPhone);

                    if($check_number == false){
                        msg("번호가 정확하지 않습니다. <br> 올바른 번호(000-0000-0000)를 적어주세요.");
                        exit;
                    }

                    //생년월일 검사
                    // $check_birth = preg_match("/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $youBirth);

                    // if($check_birth == false){
                    //     msg("생년월일이 정확하지 않습니다. <br> 올바른 생년월일(YYYY-MM-DD)을 적어주세요.");
                    //     exit;
                    // }

                    // 이메일 검사
                    $check_email = filter_var($youEmail, FILTER_VALIDATE_EMAIL);

                    if($check_email == false){
                        msg("이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요.");
                        exit;
                    }

                    // 아이디 중복 검사
                    $isIdCheck = false;

                    $sql = "SELECT youID FROM myMember WHERE youID = '$youID'";
                    $result = $connect -> query($sql);

                    if($result){
                        $count = $result -> num_rows;

                        if($count == 0){
                            $isIdCheck = true; //트리거 변수 : 조건에 맞은 후 변환
                        } else {
                            msg("이미 가입 된 아이디 입니다. 로그인을 해주세요.");
                            exit;
                        }
                    } else {
                        msg("에러 발생01 - 관리자에게 문의하세요."); //sql문 오류
                        exit;
                    }    

                    //이메일 중복 검사
                    $isEmailCheck = false;

                    $sql = "SELECT youEmail FROM myMember WHERE youEmail = '$youEmail'";
                    $result = $connect -> query($sql);

                    if($result){
                        $count = $result -> num_rows;

                        if($count == 0){
                            $isEmailCheck = true; //트리거 변수 : 조건에 맞은 후 변환
                        } else {
                            msg("이미 가입 된 이메일 입니다. 로그인을 해주세요.");
                            exit;
                        }
                    } else {
                        msg("에러 발생02 - 관리자에게 문의하세요."); //sql문 오류
                        exit;
                    }

                    //핸드폰 중복 검사
                    $isPhoneCheck = false;

                    $sql = "SELECT youPhone FROM myMember WHERE youPhone = '$youPhone'";
                    $result = $connect -> query($sql);  //위랑 변수명이 같아도 상관없다

                    if($result){
                        $count = $result -> num_rows;

                        if($count == 0){
                            $isPhoneCheck = true;
                        } else {
                            msg("올바르지 않은 휴대폰 번호입니다. 다시 확인 해주세요.");
                            exit;
                        }
                    } else {
                        msg("에러 발생03 - 관리자에게 문의하세요."); //sql문 오류
                        exit;
                    }

                    //데이터 가져오기 -> 유효성 검사 -> 중복 검사(이메일,핸드폰 둘 다 true) -> 회원가입
                    //회원가입
                    if($isIdCheck = true && $isEmailCheck = true && $isPhoneCheck = true){

                        $sql = "INSERT INTO myMember(youID, youPass, youName, youPhone, youEmail, regTime) 
                        VALUES('$youID', '$youPass', '$youName', '$youPhone', '$youEmail', '$regTime')";

                        $result = $connect -> query($sql);

                        if($result){
                            msg("회원가입을 축하합니다. 로그인 해주세요!!");
                        } else {
                            msg("에러 발생04 - 관리자에게 문의하세요.");
                            exit;
                        }
                    } else {
                        msg("이메일 혹은 휴대폰 번호가 다릅니다. 다시 한번 확인해주세요.");
                        exit;
                    }

                    ?>
                     <div class="card good">
                    <div class="dog">
                        <div class="head">
                            <div class="ears"></div>
                            <div class="face"></div>
                            <div class="eyes">
                                <div class="teardrop"></div>
                            </div>
                            <div class="nose"></div>
                            <div class="mouth">
                                <div class="tongue"></div>
                            </div>
                            <div class="chin"></div>
                        </div>
                        <div class="body">
                            <div class="tail"></div>
                            <div class="legs"></div>
                        </div>
                    </div>
                </div>
                </div>
            </article>
        </section>
    </main> 
    <!--//contentes-->

    <footer id="footer">
        <?php
            include "../include/footer.php"
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>