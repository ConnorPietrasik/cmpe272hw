<?php
    $title = "News";
    include("src/element/head.php");
?>
<h2>News:</h2>
<?php  
    $articles = scandir('news');
    foreach($articles as $art){
        if ($art !== "." && $art !== ".."){
            echo "<hr>";
            readfile("news/$art");
        }
    }
?>