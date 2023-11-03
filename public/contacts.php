<?php
    $title = "Contacts";
    include("src/element/head.php");
?>
<h2>Contacts:</h2>
<?php  
    $contacts = scandir('contacts');
    foreach($contacts as $con){
        if ($con !== "." && $con !== ".."){
            echo "<hr>";
            readfile("contacts/$con");
        }
    }
?>