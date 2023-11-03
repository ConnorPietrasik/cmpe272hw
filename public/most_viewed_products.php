<!DOCTYPE html>
<html>
    <head>
        <title>Most-Viewed Products - StuffCo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php readfile("nav.html"); ?>
        <p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>
        <table style="width: 100%;"><tr>
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
                    $products = scandir('products');
                    unset($products["."]);
                    unset($products[".."]);

                    $counts = [];
                    foreach($products as $prod){
                        $counts[$prod] = trim(file_get_contents("products/$prod/view_count.txt"));
                    }
                    arsort($counts);

                    $products = array_keys(array_slice($counts, 0, 5));
                    include("src/element/product/clickable_products.php");
                ?>
            </td>
        </tr></table>

    </body>
</html>