<?php 
require_once("display_products.php");

if (count($_POST) != 1) {
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

    //Moves product to front of recent instead of having duplicates
    $i = array_search($prod, $recents);
    if ($i === false){
        if (count($recents) > 4) unset($recents[4]);
    }
    else unset($recents[$i]);

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
        include("src/element/product/full_prod.php");

        $count = trim(file_get_contents("products/$prod/view_count.txt"));
        file_put_contents("products/$prod/view_count.txt", (int)$count + 1);
    ?>
</body>

</html>