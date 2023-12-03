<?php
    include("src/element/head.php");
    require_once("src/database.php");
    $db->addCompanyToDB("StuffCo", 'https://cmpe272hw.pietrasik.top/index.php');
    echo "Done";
?>