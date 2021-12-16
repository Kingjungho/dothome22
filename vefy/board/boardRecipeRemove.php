<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $RecipeID = $_GET['RecipeID'];
    $RecipeID = $connect -> real_escape_string($RecipeID);

    $sql = "DELETE FROM myRecipe WHERE myRecipeID = {$RecipeID}";
    $connect -> query($sql);
?>
<script>
    location.href = "boardRecipe.php";
</script>