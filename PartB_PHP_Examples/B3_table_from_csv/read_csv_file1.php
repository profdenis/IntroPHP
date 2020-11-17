<?php
require_once "../../common/functions_defs.php";
$title = "Part B3 -- Read a CSV File";
require_once "../../common/header.php";

$fruits = array();
$fruits_file = fopen("fruits1.csv", "r") or die("Unable to open file!");

while (($data = fgetcsv($fruits_file, 1000, ",")) !== FALSE) {
    $count = count($data);
    if ($count >= 2) {
        $fruits[$data[0]] = $data[1];
    }
}
fclose($fruits_file);

array_to_dl_list($fruits);

require_once "../../common/footer.php";

