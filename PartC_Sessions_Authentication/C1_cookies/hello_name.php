<?php
require_once "../../common/functions_defs.php";
$title = "Part C1 -- Cookies";
require_once "../../common/header.php";

if (isset($_COOKIE["name"])) {
    $name = clean_data($_COOKIE["name"]);
    echo "<h3>Hello $name!</h3>";
} else {
    header("Location: name.php");
}
require_once "../../common/footer.php";
