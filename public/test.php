<?php
    include("src/element/head.php");
    require_once("src/linked_database.php");
    $db->changeCompanyDomain("StuffCo", 'https://cmpe272hw.pietrasik.top/');
    echo "Done";
?>