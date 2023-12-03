<?php
    $title = "testing";
    include("src/element/head.php");
    require_once("src/linked_database.php");

    $db->fixProductNulls();
    echo "done";
?>