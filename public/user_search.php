<?php
    $title = "User Search";
    include("src/element/head.php");
?>
<h2>User Search</h2>
<form action="user_search.php" method="get" class="user-search">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="<?= $_GET["first_name"] ?? '' ?>">
    <br>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="<?= $_GET["last_name"] ?? '' ?>">
    <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?= $_GET["email"] ?? '' ?>">
    <br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?= $_GET["phone"] ?? '' ?>">
    <br>
    <input type="submit" value="Search">
</form>
<p class="note">Note: An empty search shows all users because it's not filtering out any</p>
<br>
<?php
    if (!empty($_GET)){
        require_once("src/database.php");
        $data = $db->searchUsers($_GET["first_name"] ?: null, $_GET["last_name"] ?: null, $_GET["email"] ?: null, $_GET["phone"] ?: null);
        if (!empty($data)){
            include("src/element/table_display.php");
        }
        else echo "<p>No matching users found.</p>";
    }
?>