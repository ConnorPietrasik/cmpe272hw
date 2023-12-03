<?php
    $title = "Combined Top Products by Views";
    include("src/element/head.php");
    require_once("src/linked_database.php");

    echo "<h2>Top 5 Products by Viewcount</h2>";
    $companies = $db->getAllCompanies();
    $width = (int) 100 / count($companies);
    echo "<table class=\"layout\"><tr>";
    foreach ($companies as $c){
        echo "<td class=\"column\" style=\"width: ".$width."%\">";
        echo "<h3>".$c["name"]."</h3>";
        $products = $db->getTopProductsHitsByCompany($c["id"]);
        include("src/element/product/full_products.php");
    }
    echo "</tr></table>";

?>