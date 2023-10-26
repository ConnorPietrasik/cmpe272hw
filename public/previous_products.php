<?php require_once("display_products.php"); ?>

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
            $recents = explode(",", $_COOKIE["recent"]);

            display($recents, 1);
        }
        else {
            echo "No products recently viewed!";
        }
        ?>
    </body>
</html>