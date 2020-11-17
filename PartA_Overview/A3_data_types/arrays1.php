<?php
$fav_fruits = array("apple", "banana", "orange", "blueberry", "strawberry");
// will generate an error: cannot convert an array to a string directly
//echo $fruits . "<br>";
// use the print_r function instead, or make your own loop
print_r($fav_fruits);
echo "<br>";
echo "First fruit at index 0: $fav_fruits[0]<br>";
echo "Last fruit at index 4: $fav_fruits[4]<br>";

// using sizeof instead of hard-coded value
// notice the use of of \$ to get a $ in the output and avoid variable expansion
// and the curly brackets around the more complicated expression to calculate the index within the string
echo "Last fruit at index sizeof(\$fav_fruits)-1: {$fav_fruits[sizeof($fav_fruits)-1]}<br>";

// add an element at the end of an array
$fav_fruits[] = "pear";
print_r($fav_fruits);
echo "<br>";

// delete an array element
unset($fav_fruits[2]);
print_r($fav_fruits);