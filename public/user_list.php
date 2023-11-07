<?php

require_once("src/database.php");

echo json_encode($db->getAllUsers());

?>