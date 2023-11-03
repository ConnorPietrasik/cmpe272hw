<!DOCTYPE html>
<html>
    <head>
        <title>Products - StuffCo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php readfile("nav.html"); ?>
        <h2>Products:</h2>
        <p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>
        <a class="recently-viewed" href="previous_products.php">Recently viewed</a>
        <a class="most-viewed" href="most_viewed_products.php">Most viewed</a>

        <?php 
            $products = scandir('products');
            include("src/element/product/clickable_products.php");
        ?>
    </body>
</html>