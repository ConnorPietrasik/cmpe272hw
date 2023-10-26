<!DOCTYPE html>
<html>

<?php 
    if (empty($_POST)){
        echo "Bad link! Go away!";
        die();
    }
?>

<head>
    <title>Products - StuffCo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php readfile("nav.html"); ?>
    <h2>Product:</h2>
    <pre> <?php var_dump(array_keys($_POST)) ?> </pre>
</body>

</html>