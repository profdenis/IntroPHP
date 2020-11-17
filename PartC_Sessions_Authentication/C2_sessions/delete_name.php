<?php
session_start(['cookie_lifetime' => 60,]) or die("Cannot start the session. Are cookies enabled?");

require_once "../../common/functions_defs.php";
$title = "Part C2 -- Sessions";
require_once "../../common/header.php";

if (isset($_SESSION["name"])) {
    unset($_SESSION["name"]);
    echo "<h3>Deleted name from session!</h3><h5>Session data:</h5>";
    print_r($_SESSION);
} else {
    header("Location: name.php");
}
require_once "../../common/footer.php";
