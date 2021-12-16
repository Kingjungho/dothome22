<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>아이디 찾기</title>

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
            <h2 class="ir_so">아이디 찾기</h2>
            <article class="content-article">
                <div class="member-form">
                    <h3>안내</h3>
                    <?php
                        include "../connect/connect.php";

                        //아이디 찾기
                        $youName = $_POST['youName'];
                        $youPhone = $_POST['youPhone'];
                        $check = $_POST['check'];

                        if($check == 0){
                            $sql = "SELECT youID FROM myMember WHERE youName = '$youName' AND youPhone = '$youPhone'";
                            $result = $connect -> query($sql);
                            
                            if($result){
                                $count = $result -> num_row;

                                if($result -> num_rows == 1){
                                    $row = $result -> fetch_array(MYSQLI_ASSOC);
                                    echo "찾으신 아이디는 <span class='find_id_view'>" .$row['youID']. "</span> 입니다.";
                                } else {
                                    echo "<script>alert('아이디 혹은 휴대폰 번호를 잘못 입력하였습니다. 다시 확인해주세요! '); history.back(1);</script>";
                                    // echo "이름 혹은 휴대폰 번호를 잘못 입력하였습니다. <br> 입력하신 정보는 : ";
                                    // echo " " .$youName. " /";
                                    // echo " " .$youPhone. " ";
                                    // echo " 입니다.";
                                }
                            } else {
                                echo "실패";
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