<?php
$title = "Part B2 -- Write File";
require_once "../../common/header.php";

$fruits = array("apple", "banana", "orange", "blueberry", "strawberry");
$fruits_file = fopen("fruits2.txt", "w") or die("Unable to open file!");
foreach ($fruits as $fruit) {
    fwrite($fruits_file, $fruit . "\n");
}
fclose($fruits_file);

echo "<p>File <code>fruits2.txt</code> written";

require_once "../../common/footer.php";
