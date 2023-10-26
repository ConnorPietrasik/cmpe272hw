<?php require_once("display_products.php"); ?>

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
        <table style="width: 100%"><tr>
            <td style="width: 50%">
                <h2>Personally Viewed Products:</h2>
                <?php 
                if (isset($_COOKIE["recent"])){
                    $viewed = $_COOKIE;
                    unset($viewed["recent"]);
                    arsort($viewed);

                    var_dump($viewed);
                    //display($recents, 1);
                }
                else {
                    echo "No products recently viewed!";
                }
                ?>
            </td>
        </tr></table>

    </body>
</html>