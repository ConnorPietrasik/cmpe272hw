<?php
    $title = "Add User";
    include("src/element/head.php");
?>
<h2>Add User</h2>
<form action="add_user.php" method="post" class="add-user">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="" required>
    <br>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="" placeholder="example@example.com">
    <br>
    <label for="home_phone">Home Phone:</label>
    <input type="tel" id="home_phone" name="home_phone" value="" placeholder="14081112222" title="10 digit number, just the digits" pattern="[0-9]{10}">
    <br>
    <label for="cell_phone">Cell Phone:</label>
    <input type="tel" id="cell_phone" name="cell_phone" value="" placeholder="14081112222" title="10 digit number, just the digits" pattern="[0-9]{10}">
    <br>
    <input type="submit" value="Submit">
</form>
<br>
<?php
    var_dump($_POST);

    if (!empty($_GET)){
        require_once("src/database.php");
        $data = $db->searchUsers($_GET["first_name"] ?: null, $_GET["last_name"] ?: null, $_GET["email"] ?: null, $_GET["phone"] ?: null);
        if (!empty($data)){
            include("src/element/table_display.php");
        }
        else echo "<p>No matching users found.</p>";
    }
?>