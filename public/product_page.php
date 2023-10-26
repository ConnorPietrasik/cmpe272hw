<?php 
if (empty($_POST)) {
    echo "Bad link! Go away!";
    die();
}

//Count number of times user visits product page in 30 days
$prod = array_keys($_POST)[0];
if (isset($_COOKIE[$prod])){
    setcookie($prod, $_COOKIE[$prod] + 1, time() + (86400 * 30));
}
else setcookie($prod, 1, time() + (86400 * 30));

//Store most recent 5 product pages viewed, format: "p1,p2,p3,p4,p5"
if (isset($_COOKIE["recent"])){
    $recents = explode(",", $_COOKIE["recent"]);

    if (count($recents) > 4) unset($recents[4]);
    $ret = "$prod," . implode(",", $recents);

    setcookie("recent", $ret, time() + (86400 * 30));
}
else setcookie("recent", $prod, time() + (86400 * 30));

?>

<html>
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