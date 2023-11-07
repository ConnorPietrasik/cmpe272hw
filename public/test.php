<?php
    $url = 'https://subramanyajagadeesh-0a2895b9a580.herokuapp.com/exposed_users.php';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $users = curl_exec($ch);
    var_dump($users);
    curl_close($ch);
?>