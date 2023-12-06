<?php
    $title = "Most-Viewed";
    include("src/element/head.php");
?>
<p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>
<table class="layout">
    <tr>
        <td class="column" style="width: 50%">
            <h2>Personally Most-Viewed Products:</h2>
            <?php 
                if (isset($_COOKIE["recent"])){
                    $viewed = $_COOKIE;
                    unset($viewed["recent"]);
                    arsort($viewed);

                    $products = array_keys(array_slice($viewed, 0, 5));
                    include("src/element/product/clickable_products.php");
                }
                else {
                    echo "No products recently viewed!";
                }
            ?>
        </td>
        <td class="column" style="width: 50%">
            <h2>Globally Most-Viewed Products:</h2>
            <?php
                require_once("src/linked_database.php");
                $products = $db->getTopProductsHitsByCompany(3);
                include("src/element/product/clickable_products.php");
            ?>
        </td>
    </tr>
</table>