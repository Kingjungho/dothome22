<!-- jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">

<h2 class="ir_so">메인 메뉴</h2>
<nav class="cl-effect-5">
    <a href="../pages/introduce.php"><span data-hover="Introduce">Introduce</span></a>
    <a href="../store/store2.php"><span data-hover="Store">Store</span></a>
    <a href="../board/board.php"><span data-hover="Community">Community</span></a>
    <a href="../board/boardRecipe.php"><span data-hover="Recipe">Recipe</span></a>
    <a href="../map/map.php"><span data-hover="Map">Map</span></a>
    <a href="../QNA/notice.php"><span data-hover="Service">Service</span></a>
</nav>
<h1><a href="../pages/main.php"><img src="../assets/img/logo_header.svg" alt="헤더로고입니다."></a></h1>
<div class="member">
    <strong class="ir_so">회원 정보 영역</strong>
    <?php
        if(isset($_SESSION['myMemberID'])){ ?>
            <a href="#"><?=$_SESSION['youName']?>  Welcome</a>
            <a href="../login/logout.php">Sign out</a>
    <?php } else { ?>
            <a href="../login/login.php" class="signIn">Sign in</a>
            <a href="../login/join.php">Sign up</a>
    <?php }; ?>
</div>

