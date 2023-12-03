<?php
    $title = "testing";
    include("src/element/head.php");
    require_once("src/linked_database.php");

    echo "<h3>Company</h3>";
    $data = [$db->getCompanyInfo(3)];
    include("src/element/table_display.php");

    echo "<h3>Products</h3>";
    echo "<pre>";
    $data = $db->getProductsByCompany(3);
    var_dump($data);
    echo "</pre>";
    //include("src/element/table_display.php");
?>