<?php 
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

    $title = array_keys($_POST)[0];
    include("src/element/head.php");

    $prod_id = array_keys($_POST)[0];
    $db->addProductHit($prod_id);

    require_once("src/linked_database.php");
    $prod = $db->getProductById($prod_id);
    include("src/element/product/full_prod.php");

    $data = $db->getReviewsByProduct($prod_id);
    include("src/element/table_display.php");
?>