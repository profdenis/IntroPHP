<?php
session_start(['cookie_lifetime' => 60,]) or die("Cannot start the session. Are cookies enabled?");

require_once "../../common/functions_defs.php";
$title = "Part C2 -- Sessions";
require_once "../../common/header.php";

if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    echo "<h3>Hello $name!</h3>";
    echo '<a href="delete_name.php">Delete name from session</a><br>';
    echo '<a href="destroy_session.php">Destroy the session</a>';
} else {
    header("Location: name.php");
}
require_once "../../common/footer.php";
