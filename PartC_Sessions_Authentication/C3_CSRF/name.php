<?php
// better to set session.use_strict_mode to 1 in php.ini file
// if not, we need to set it in every PHP file before using the session
// if we leave to 0 (false), it will reuse sessions even if we destroy it
// ini_set("session.use_strict_mode", true);

// cookie_lifetime set to 60 seconds for this example; in real life, it should be much longer
session_start(['cookie_lifetime' => 60,]) or die("Cannot start the session. Are cookies enabled?");

// generate a random token if it doesn't already exist, and save it in the session
// this token will be used as a Cross Site Request Forgery (CSRF) token in the form
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(random_bytes(24));
}

require_once "../../common/functions_defs.php";
$title = "Part C3 -- CSRF";
$name = "";
$name_error = "";
$token_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['token']) || !hash_equals($_SESSION['token'], $_POST['token'])) {
        $token_error = "Error: CSRF tokens don't match";
    } elseif (empty(trim($_POST["name"]))) {
        $name_error = "Error: no name provided";
    } else {
        $name = clean_data($_POST["name"]);
        $_SESSION["name"] = $name;
        $_SESSION["name2"] = $name;
        header("Location: hello_name.php");
    }
}

require_once "../../common/header.php";
if ($name_error || $token_error || $_SERVER["REQUEST_METHOD"] == "GET") {
    ?>
    <span class="error"><?php echo $token_error; ?></span><br>
    <form action="name.php" method="post">
        <label>What is you name? <input type="text" name="name" required>
            <span class="error"><?php echo $name_error; ?></span>
        </label><br>
        <input type="hidden" name="token" value="<?php echo $_SESSION["token"] ?>"/>
        <button type="submit">Send</button>
    </form>
    <?php
}

require_once "../../common/footer.php";
?>
