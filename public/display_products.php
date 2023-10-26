<?php
function display(array $products, bool $is_clickable = 0){

    if ($is_clickable){
        echo "<form action=\"product_page.php\" method=\"post\">";
        foreach($products as $prod){
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
        echo "</form>";
    }
    else {
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
    }
}
?>