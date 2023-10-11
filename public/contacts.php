<!DOCTYPE html>
<html>
    <head>
        <title>Contacts - StuffCo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php readfile("nav.html"); ?>
        <h2>Contacts:</h2>
        <?php  
            $contacts = scandir('contacts');
            foreach($contacts as $con){
                if ($con !== "." && $con !== ".."){
                    echo "<hr>";
                    readfile("contacts/$con");
                }
            }
        ?>
    </body>
</html>