<?php
require_once "../../common/functions_defs.php";
$title = "Part B3 -- Read a CSV File & Generate abHTML Table";
require_once "../../common/header.php";

$fruits = array();
$fruits_file = fopen("fruits1.csv", "r") or die("Unable to open file!");

echo "<table>";

while (($data = fgetcsv($fruits_file, 1000, ",")) !== FALSE) {
    echo "<tr>\n";
    foreach ($data as $col) {
        echo "<td>$col</td>\n";
    }
    echo "</tr>\n";
}
fclose($fruits_file);

echo "</table>";

require_once "../../common/footer.php";

