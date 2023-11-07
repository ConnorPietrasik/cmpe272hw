<?php
    $title = "Combined Users";
    include("src/element/head.php");
?>
<h3>All User Lists:</h3>
<h3>StuffCo:</h3>
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
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        $users = curl_exec($ch);
        if (curl_errno($ch)){
            echo "<p class = \"error\">Failed to access user list from $name via ".$url." due to ".curl_error($ch)."</p>";
            echo "Curl header:".curl_getinfo($ch)['request_header'];
        }
        else {
            $data = json_decode($users);
            include("src/element/table_display.php");
        }
        curl_close($ch);
    }
?>