<!DOCTYPE html>
<html>

<?php
if (empty($_POST)) {
    echo "Bad link! Go away!";
    die();
}
?>

<head>
    <title><?php echo array_keys($_POST)[0]; ?> - StuffCo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php readfile("nav.html"); ?>

    <?php
    $prod = array_keys($_POST)[0];
    if ($prod !== "." && $prod !== "..") {
        echo "<hr><h3 class=\"prod-name\">$prod</h3>";
        echo "<img src=\"products/$prod/main.png\" alt=\"$prod image\" class=\"prod-pic\">";
        echo "<p class=\"prod-desc\">";
        readfile("products/$prod/desc.txt");
        echo "</p>";
        echo "<p class=\"prod-price\">";
        readfile("products/$prod/price.txt");
        echo "</p>";
    }
    else echo "BAD! NO!";
    ?>
</body>

</html>