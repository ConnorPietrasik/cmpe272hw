<?php
    $title = "testing";
    include("src/element/head.php");
    require_once("src/linked_database.php");

    $data = $db->getTopProductsRatingCombined();
    include("src/element/table_display.php");
    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";
?>