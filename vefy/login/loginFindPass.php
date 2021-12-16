<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>비밀번호 찾기</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
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
            <h2 class="ir_so">비밀번호 찾기</h2>
            <article class="content-article">
                <div class="member-form">
                    <h3>안내</h3>
                    <?php
                        include "../connect/connect.php";

                        //비밀번호 찾기
                        $youID = $_POST['youID'];
                        $youPhone = $_POST['youPhone'];
                        $check = $_POST['check'];

                        if($check == 0){
                            $sql = "SELECT youPass FROM myMember WHERE youID = '$youID' AND youPhone = '$youPhone'";
                            $result = $connect -> query($sql);
                            
                            if($result){
                                $count = $result -> num_row;

                                if($result -> num_rows == 1){
                                    $row = $result -> fetch_array(MYSQLI_ASSOC);
                                    // echo "<script>alert('php로 alert띄우기!');</script>";
                                    // echo "<script>alert('찾으신 비밀번호는 <span class='find_id_view'>" .$row['youPass']. "</span> 입니다.'); history.back(1);</script>";
                                    echo "찾으신 비밀번호는 <span class='find_id_view'>" .$row['youPass']. "</span> 입니다.";
                                } else {
                                    echo "<script>alert('아이디 혹은 휴대폰 번호를 잘못 입력하였습니다. 다시 확인해주세요! '); history.back(1);</script>";
                                    // echo "아이디 혹은 휴대폰 번호를 잘못 입력하였습니다. <br> 입력하신 정보는 : ";
                                    // echo " " .$youID. " /";
                                    // echo " " .$youPhone. " ";
                                    // echo " 입니다.";
                                }
                            } else {
                                echo "씨발 개같네";
                            }
                        }
                    ?>
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