<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE myRecipe (";
    $sql .= "myRecipeID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "RecipeTitle varchar(50) NOT NULL,";
    $sql .= "RecipeContent longtext NOT NULL,";
    $sql .= "RecipeView int(10) NOT NULL,";
    $sql .= "regTime int(15) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (myRecipeID)) CHARSET=utf8;";

    $result = $connect -> query($sql);

    if($result){
        echo "Creat Recipe True";
    } else {
        echo "Creat Recipe False";
    };
?>