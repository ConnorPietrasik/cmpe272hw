<?php

require_once("src/database.php");
$db = new Database;

echo json_encode($db->getAllUsers());

?>