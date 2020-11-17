<?php
require_once "../../common/functions_defs.php";
$title = "Part B4 -- Simple name form";
require_once "../../common/header.php";

$name_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["name"]))) {
        $name_error = "Error: no name provided";
    } else {
        $name = clean_data($_POST["name"]);
        echo "<h3>Your name is: $name</h3>";
    }
}
if ($name_error || $_SERVER["REQUEST_METHOD"] == "GET") {
    ?>
    <form action="name4.php" method="post">
        <label>What is your name? <input type="text" name="name" required>
            <span class="error"><?php echo $name_error; ?></span>
        </label><br>
        <button type="submit">Send</button>
    </form>
    <?php
}
require_once "../../common/footer.php";
?>
