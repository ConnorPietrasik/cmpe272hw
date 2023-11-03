<?php
    foreach($products as $prod){
        if ($prod !== "." && $prod !== ".."){
            echo "<hr>";
            include("basic_prod.php");
        }
    }
?>