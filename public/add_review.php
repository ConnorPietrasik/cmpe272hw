<?php
    $title="Add Review";
    include("src/element/head.php");
    if (!empty($_POST)) {
        if (empty($_POST["rating"])) {
            echo "<p class=\"error\">Missing rating</p>";
            die()
        }
        if ($_POST["rating"] < 1 || $_POST["rating"] > 5) {
            echo "<p class=\"error\">Bad rating input</p>";
            die()
        }
        if (empty($_COOKIE) || empty($_COOKIE["userid"])) {
            echo "<p class=\"error\">Not logged in</p>";
        }

        require_once("src/linked_database.php");
        $db->addReview(
            $_COOKIE["userid"],
            $_POST["product_id"],
            $_POST["rating"],
            $_POST["review"] ?: null
        );

        echo "<p>Review added: </p>";
        $data = [$_POST];
        include("src/element/table_display.php");
    }
?>