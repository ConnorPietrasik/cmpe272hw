<?php
    $title = "Combined Users";
    include("src/element/head.php");
?>
<h2>Local:</h2>


<p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>
<table style="width: 100%;">
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
                $products = array_diff(scandir('products'), [".", ".."]);

                $counts = [];
                foreach($products as $prod){
                    $counts[$prod] = trim(file_get_contents("products/$prod/view_count.txt"));
                }
                arsort($counts);

                $products = array_keys(array_slice($counts, 0, 5));
                include("src/element/product/clickable_products.php");
            ?>
        </td>
    </tr>
</table>