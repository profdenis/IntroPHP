<?php
require_once "../../common/functions_defs.php";
$title = "Part C1 -- Cookies";
$name = "";
$name_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["name"]))) {
        $name_error = "Error: no name provided";
    } else {
        $name = clean_data($_POST["name"]);
        setcookie("name", $name, time() + 60, "/");
        header("Location: hello_name.php");
    }
}

require_once "../../common/header.php";
if ($name_error || $_SERVER["REQUEST_METHOD"] == "GET") {
    ?>
    <form action="name.php" method="post">
        <label>What is you name? <input type="text" name="name" required>
            <span class="error"><?php echo $name_error; ?></span>
        </label><br>
        <button type="submit">Send</button>
    </form>
    <?php
}

require_once "../../common/footer.php";
?>
