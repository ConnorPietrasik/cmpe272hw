<!DOCTYPE html>
<html>
    <head>
        <title>Previous Products - StuffCo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php readfile("nav.html"); ?>
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
    </body>
</html>