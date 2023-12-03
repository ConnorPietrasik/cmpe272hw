<?php
    $title = "Products";
    include("src/element/head.php");
?>
<h2>Products:</h2>
<p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>
<a class="recently-viewed" href="previous_products.php">Recently viewed</a>
<a class="most-viewed" href="most_viewed_products.php">Most viewed</a>

<?php 
    require_once("src/linked_database.php");
    $products = $db->getProductsByCompany(3);
    include("src/element/product/clickable_products.php");

    // $products = scandir('products');
    // include("src/element/product/clickable_products.php");
?>