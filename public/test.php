<?php
    require_once("src/linked_database.php");
    $tables = $db->getAllTables();
    if (!empty($tables)){
        foreach($tables as $data){
            include("src/element/table_display.php");
        }
    }
    else echo "<p>No matching tables.</p>";
?>