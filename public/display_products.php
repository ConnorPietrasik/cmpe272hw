<?php
function display(array $products, bool $is_clickable = false){

    if ($is_clickable){
        echo "<form action=\"product_page.php\" method=\"post\">";
        foreach($products as $prod){
            if ($prod !== "." && $prod !== ".."){
                echo "<hr>";
                include("/src/view/clickable_prod.php");
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