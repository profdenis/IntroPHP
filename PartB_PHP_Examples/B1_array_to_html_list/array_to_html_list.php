<?php
require_once "../../common/functions_defs.php";
$title = "Part B1 -- Array to HTML List";
require_once "../../common/header.php";

$fruits = array("apple", "banana", "orange", "blueberry", "strawberry");
// uncomment to sort the fruits array
//asort($fruits);
$fav_fruits = array("Alice" => "apple",
    "Bob" => "banana",
    "Olivier" => "orange",
    "Babine" => "blueberry",
    "Sabine" => "strawberry");

// uncomment to sort the fav_fruits array by values
//asort($fav_fruits);
// uncomment to sort the fav_fruits array by keys
//ksort($fav_fruits);

array_to_ol_list($fruits);
array_to_ul_list($fav_fruits, true);
array_to_dl_list($fav_fruits);

require_once "../../common/footer.php";
