<?php
    $title = "Products";
    include("src/element/head.php");
?>
<h2>Products:</h2>
<p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>
<a class="recently-viewed" href="previous_products.php">Recently viewed</a>
<a class="most-viewed" href="most_viewed_products.php">Most viewed</a>

<?php 
    $products = scandir('products');
    include("src/element/product/clickable_products.php");
?>