<?php
    include("src/element/head.php");
    require_once("src/database.php");

    echo "<h3>Company</h3>";
    $data = $db->getCompanyInfo(3);
    include("src/element/table_display.php");

    echo "<h3>Products</h3>";
    $data = $db->getProductsByCompany(3);
    include("src/element/table_display.php");
?>