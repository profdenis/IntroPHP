<?php
require_once "../../common/functions_defs.php";
$title = "Part B2 -- Read File";
require_once "../../common/header.php";

$fruits = array();
$fruits_file = fopen("fruits1.txt", "r") or die("Unable to open file!");
while (!feof($fruits_file)) {
    $line = trim(fgets($fruits_file));
    // do not add to the fruits array if the line is empty
    if ($line) {
        $fruits[] = $line;
    }
}
fclose($fruits_file);

array_to_ol_list($fruits);

require_once "../../common/footer.php";
