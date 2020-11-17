<?php
$fav_fruits = array("Alice" => "apple",
    "Bob" => "banana",
    "Olivier" => "orange",
    "Babine" => "blueberry",
    "Sabine" => "strawberry");

echo "<br>foreach loop on values<br>";
foreach ($fav_fruits as $fruit) {
    echo "$fruit<br>";
}

echo "<br>foreach loop on keys<br>";
foreach (array_keys($fav_fruits) as $key) {
    echo "$key<br>";
}

echo "<br>foreach loop on (key,value) pairs<br>";
foreach ($fav_fruits as $key => $fruit) {
    echo "$key => $fruit<br>";
}
