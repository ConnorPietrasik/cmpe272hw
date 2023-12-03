<?php
    require_once("src/linked_database.php");
    $data = $db->getAllTables();
    if (!empty($data)){
        include("src/element/table_display.php");
    }
    else echo "<p>No matching tables.</p>";
?>