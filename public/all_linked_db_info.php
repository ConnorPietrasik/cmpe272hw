<?php
    include("src/element/head.php");
    require_once("src/linked_database.php");
    $tables = $db->getAllInfo();
    if (!empty($tables)){
        foreach($tables as $name => $data){
            echo "<h3>".$name."</h3>";
            include("src/element/table_display.php");
        }
    }
    else echo "<p>No matching tables.</p>";
?>