<?php
    if( !isset($_SESSION['youID']) ){
        Header("Location: ../login/login.php");
    }
?>