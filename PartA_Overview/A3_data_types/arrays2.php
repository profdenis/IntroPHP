<?php
// associative arrays, also known as dictionaries, as opposed to index arrays,
// use (key, value) pairs instead of indexes
$fav_fruits = array("Alice" => "apple",
    "Bob" => "banana",
    "Olivier" => "orange",
    "Babine" => "blueberry",
    "Sabine" => "strawberry");

// will generate an error: cannot convert an array to a string directly
//echo $fruits . "<br>";
// use the print_r function instead, or make your own loop
print_r($fav_fruits);
echo "<br>";

// don't go by index, go by key to get elements
// notice the use of curly brackets to make it easier to access elements by key within a string
echo "Fruit with key \"Alice\": {$fav_fruits["Alice"]}<br>";

// adding a key-value pair; order of keys is not important in an associative array
$fav_fruits["Pedro"] = "pear";
print_r($fav_fruits);
echo "<br>";

// delete an array element
unset($fav_fruits["Babine"]);
print_r($fav_fruits);