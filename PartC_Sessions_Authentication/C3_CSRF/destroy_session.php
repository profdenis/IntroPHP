<?php
session_start(['cookie_lifetime' => 60,]) or die("Cannot start the session. Are cookies enabled?");

require_once "../../common/functions_defs.php";
$title = "Part C3 -- Sessions";
require_once "../../common/header.php";

session_unset();
session_destroy();
echo "<h3>Destroyed the session!</h3><h5>Session data:</h5>";
print_r($_SESSION);
echo '<br><a href="name.php">Go back</a>';
require_once "../../common/footer.php";