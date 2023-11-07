<?php
    $title = "User Search";
    include("src/element/head.php");
?>
<h2>User Search:</h2>
<form action="user_search.php" method="post" class="user-search">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="<?= $_POST["first_name"] ?? '' ?>">
    <br>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="<?= $_POST["last_name"] ?? '' ?>">
    <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?= $_POST["email"] ?? '' ?>">
    <br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?= $_POST["phone"] ?? '' ?>">
    <br>
    <input type="submit" value="Search">
</form>
<?php
    require_once("src/database.php");

    $data = $db->getAllUsers();
    include("src/element/table_display.php");

    var_dump($_POST);
?>