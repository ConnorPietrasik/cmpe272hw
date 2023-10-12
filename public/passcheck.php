<?php

function login_failed(){
    echo "Login failed.";
    die();
}

extract($_POST);

if ( !$USERNAME || !$PASSWORD){
    login_failed();
}

if (!($file = fopen("../logins.txt", "r"))){
    echo "Login file is broken.";
    login_failed();
}

while (($line = fgets($file)) !== false){

}
fclose($file);

?>