<?php
    $title = "Combined Users";
    include("src/element/head.php");
?>
<h2>Local:</h2>
<?php
    require_once("src/database.php");
    $users = $db->getAllUsers();
    
    include("src/element/user_list.php");
?>