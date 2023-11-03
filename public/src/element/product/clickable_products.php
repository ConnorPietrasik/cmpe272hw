<?php
    echo "<form action=\"product_page.php\" method=\"post\">";
    foreach($products as $prod){
        if ($prod !== "." && $prod !== ".."){
            echo "<hr>";
            include("clickable_prod.php");
        }
    }
    echo "</form>";
?>