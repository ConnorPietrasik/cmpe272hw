<?php
    $title = "Add User";
    include("src/element/head.php");
?>
<h2>Add User</h2>
<form action="add_user.php" method="post" class="add-user">
    <label for="first_name">First Name:*</label>
    <input type="text" id="first_name" name="first_name" value="" required>
    <br>
    <label for="last_name">Last Name:*</label>
    <input type="text" id="last_name" name="last_name" value="" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="" placeholder="example@example.com">
    <br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="">
    <br>
    <label for="home_phone">Home Phone:</label>
    <input type="tel" id="home_phone" name="home_phone" value="" placeholder="4081112222" title="10 digit number, just the digits" pattern="[0-9]{10}">
    <br>
    <label for="cell_phone">Cell Phone:</label>
    <input type="tel" id="cell_phone" name="cell_phone" value="" placeholder="4081112222" title="10 digit number, just the digits" pattern="[0-9]{10}">
    <br>
    <input type="submit" value="Submit">
</form>
<br>
<?php
    var_dump($_POST);

    if (!empty($_POST)){
        if (empty($_POST["first_name"]) || empty($_POST["last_name"])){
            echo "<p class=\"error\">Missing name</p>";
        }
        if (!empty($_POST["home_phone"]) && !preg_match('/[0-9]{10}/', $_POST["home_phone"])){
            echo "<p class=\"error\">Bad home phone input</p>";
        }
        if (!empty($_POST["cell_phone"]) && !preg_match('/[0-9]{10}/', $_POST["cell_phone"])){
            echo "<p class=\"error\">Bad cell phone input</p>";
        }

        require_once("src/database.php");
        $db->addUser($_POST["first_name"] ?: null, $_POST["last_name"] ?: null, $_POST["email"] ?: null, 
                    $_POST["address"] ?: null, $_POST["home_phone"] ?: null, $_POST["cell_phone"] ?: null);

        echo "<p>User added: </p>";
        $data = [$_POST];
        include("src/element/table_display.php");
    }
?>