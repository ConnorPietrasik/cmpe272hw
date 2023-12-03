<?php
    $title = "testing";
    include("src/element/head.php");
    require_once("src/linked_database.php");

    $data = $db->getTopProductsHitsByCompany(3);
    include("src/element/table_display.php");
?>