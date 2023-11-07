<?php
    $title = "Combined Users";
    include("src/element/head.php");
?>
<h2>Local:</h2>
<?php
    require_once("src/database.php");
    $data = $db->getAllUsers();
    
    include("src/element/table_display.php");

    $urls = ['https://sayali-cmpe272.bayaskarpowerpack.co.in/exposed_userdb.php', 'https://subramanyajagadeesh-0a2895b9a580.herokuapp.com/exposed_users.php', 'https://rnrnattojicmpe272.000webhostapp.com/assignment-4/exposecontacts.php'];

    $url = $urls[0];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $users = curl_exec($ch);
    var_dump($users);
    $data = json_decode($users);
    include("src/element/table_display.php");
    curl_close($ch);
?>