<!DOCTYPE html>
<html>

<head>
    <title>Secure - StuffCo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php readfile("nav.html"); ?>

    <?php 
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
</body>

</html>