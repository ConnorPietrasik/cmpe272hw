<?php
    $title = "Combined Users";
    include("src/element/head.php");
?>
<h2>StuffCo Users:</h2>
<?php
    require_once("src/database.php");
    $data = $db->getAllUsers();
    
    include("src/element/table_display.php");

    $urls = ['Blend Station'=>'https://sayali-cmpe272.bayaskarpowerpack.co.in/exposed_userdb.php', 
            'Student Furniture Spot'=>'https://subramanyajagadeesh-0a2895b9a580.herokuapp.com/exposed_users.php', 
            'RNR Elektronics'=>'https://rnrnattojicmpe272.000webhostapp.com/assignment-4/exposecontacts.php'];

    foreach($urls as $name => $url){
        echo "<h3>".$name."</h3>";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $users = curl_exec($ch);
        $data = json_decode($users);
        include("src/element/table_display.php");
        curl_close($ch);
    }
?>