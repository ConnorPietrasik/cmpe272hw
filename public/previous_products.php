<?php
    $title = "Previous";
    include("src/element/head.php");
?>
<h2>Products:</h2>
<p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>

<?php 
    if (isset($_COOKIE["recent"])){
        $products = explode(",", $_COOKIE["recent"]);
        include("src/element/product/clickable_products.php");
    }
    else {
        echo "No products recently viewed!";
    }
?>