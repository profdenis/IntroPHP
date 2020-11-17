<?php
// lifetime: 1 day (24 hours/day, 60 minutes/hour, and 60 seconds/minute)
session_start(['cookie_lifetime' => 24*60*60,]) or die("Cannot start the session. Are cookies enabled?");

require_once "../../common/functions_defs.php";
$title = "Part C4 -- Authentication";
require_once "../../common/header.php";

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "<h3>Hello $username!</h3>";
    echo '<a href="logout.php">Log out</a>';
} else {
    echo "<h5>Not logged in</h5>";
    echo '<a href="login.php">Log in</a><br>';
    echo '<a href="register.php">Register</a><br>';
}
require_once "../../common/footer.php";
