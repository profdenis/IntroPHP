<?php
// better to set session.use_strict_mode to 1 in php.ini file
// if not, we need to set it in every PHP file before using the session
// if we leave to 0 (false), it will reuse sessions even if we destroy it
// ini_set("session.use_strict_mode", true);

// cookie_lifetime set to 60 seconds for this example; in real life, it should be much longer
session_start(['cookie_lifetime' => 60,]) or die("Cannot start the session. Are cookies enabled?");

require_once "../../common/functions_defs.php";
$title = "Part C2 -- Sessions";
$name = "";
$name_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["name"]))) {
        $name_error = "Error: no name provided";
    } else {
        $name = clean_data($_POST["name"]);
        $_SESSION["name"] = $name;
        $_SESSION["name2"] = $name;
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
