<?php
    $title = "Secure";
    include("src/element/head.php");

    function login() {
        if (!$_POST["username"] || !$_POST["password"]){
            readfile("login.html");
            return true;
        }
        else {
            $file = fopen("../logins.txt", "r");
            if (!$file){
                echo "ERROR READING LOGIN FILE";
            }
            else{
                while (($line = fgets($file)) !== false){
                    $line = rtrim($line, "\r\n");
                    $tmp = explode(",", $line);

                    if ($tmp[0] == $_POST["username"] && $tmp[1] == $_POST["password"]){
                        echo "<h2>Users:</h2>";
                        readfile("../users.txt");
                        return true;
                    }
                }
                return false;
            }
        }
    }

    if (!login()){
        echo "<h2 class=\"error\">Wrong user/pass, try again:</h2>";
        readfile("login.html");
    }
?>