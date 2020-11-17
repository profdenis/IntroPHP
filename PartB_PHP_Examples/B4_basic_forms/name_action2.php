<?php
require_once "../../common/functions_defs.php";
$title = "Part B4 -- Simple name form";
require_once "../../common/header.php";

if (empty(trim($_POST["name"]))) {
    echo "<h3>No name provided</h3>";
} else {
    $name = clean_data($_POST["name"]);
    echo "<h3>Your name is: $name</h3>";
}
require_once "../../common/footer.php";
