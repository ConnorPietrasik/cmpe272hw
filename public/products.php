<!DOCTYPE html>
<html>
    <head>
        <title>Home - StuffCo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php readfile("nav.html"); ?>
        <h2>Products:</h2>
        <p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>
        <?php  
            $products = scandir('products');
            foreach($products as $prod){
                if ($prod !== "." && $prod !== ".."){
                    echo "<hr><h3 class=\"prod-name\">$prod</h3>";
                    echo "<img src=\"products/$prod/main.png\" alt=\"$prod image\" class=\"prod-pic\">";
                    echo "<p class=\"prod-desc\">";
                    readfile("products/$prod/desc.txt");
                    echo "</p>";
                    echo "<p class=\"prod-price\">";
                    readfile("products/$prod/price.txt");  
                    echo "</p>";
                }
            }
        ?>
    </body>
</html>