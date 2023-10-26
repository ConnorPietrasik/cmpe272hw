<?php require_once("display_products.php") ?>

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
        
        <pre><?php var_dump($_COOKIE) ?></pre>

        <?php 
        if (isset($_COOKIE["recent"])){
            $recents = explode(",", $_COOKIE["recent"]);

            display($recents, 1);

            /*
            echo "<form action=\"product_page.php\" method=\"post\">";
            foreach($recent as $prod){
                if ($prod !== "." && $prod !== ".."){
                    echo "<hr><button name=\"$prod\"";
                    echo "<h3 class=\"prod-name\">$prod</h3><br>";
                    echo "<img src=\"products/$prod/main.png\" alt=\"$prod image\" class=\"prod-pic\">";
                    echo "</button>";
                    echo "<p class=\"prod-desc\">";
                    readfile("products/$prod/desc.txt");
                    echo "</p>";
                    echo "<p class=\"prod-price\">";
                    readfile("products/$prod/price.txt");  
                    echo "</p>";
                }
            }
            echo "</form>";*/
        }
        else {
            echo "No products recently viewed!";
        }
        ?>
    </body>
</html>