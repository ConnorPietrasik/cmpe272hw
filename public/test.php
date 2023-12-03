<?php
    $title = "testing";
    include("src/element/head.php");
    require_once("src/linked_database.php");

    $companies = [1, 2, 3];
    foreach ($companies as $c){
        echo "<h3>$c</h3>";
        $products = $db->getTopProductsHitsByCompany($c);
        include("src/element/product/full_products.php");
    }
    
    echo "<h3>All</h3>";
    $products = $db->getTopProductsHitsCombined();
    include("src/element/product/full_products.php");
?>