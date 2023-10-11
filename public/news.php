<!DOCTYPE html>
<html>
    <head>
        <title>News - StuffCo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php readfile("nav.html"); ?>
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
    </body>
</html>