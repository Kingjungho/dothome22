<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE Product (";
    $sql .= "pro_num` int(11) NOT NULL COMMENT '상품번호',";
    $sql .= "pro_manuname` varchar(50) NOT NULL COMMENT '제조사명,";
    $sql .= "pro_salname` varchar(50) NOT NULL COMMENT '판매업체명,";
    $sql .= "pro_name` varchar(200) NOT NULL COMMENT '상품명',";
    $sql .= "pro_class` varchar(20) NOT NULL COMMENT '분류',";
    $sql .= "pro_price` int(11) NOT NULL COMMENT '상품가격',";
    $sql .= "pro_proimg` varchar(100) NOT NULL COMMENT '제품이미지')";
    $sql .= "ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    
    $result = $connect -> query($sql);

    if($result){
        echo "Creat Product True";
    } else {
        echo "Creat Product False";
    };
?>