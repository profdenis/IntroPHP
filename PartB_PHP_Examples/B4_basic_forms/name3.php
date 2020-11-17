<?php
require_once "../../common/functions_defs.php";
$title = "Part B4 -- Simple name form";
require_once "../../common/header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["name"]))) {
        echo "<h3>No name provided</h3>";
    } else {
        $name = clean_data($_POST["name"]);
        echo "<h3>Your name is: $name</h3>";
    }
} else {
    ?>
    <form action="name3.php" method="post">
        <label>What is your name? <input type="text" name="name" required></label>
        <button type="submit">Send</button>
    </form>
    <?php
}
require_once "../../common/footer.php";
?>
