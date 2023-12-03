<?php
    $title = "Combined Top Products by Views";
    include("src/element/head.php");
    require_once("src/linked_database.php");

    echo "<h2>Top 5 Products by Viewcount</h2>";
    $products = $db->getTopProductsHitsCombined();
    include("src/element/product/full_products.php");
?>