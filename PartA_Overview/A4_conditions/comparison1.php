<?php
// = is the assignment
$x = 5;
$y = 5;
$z = "5";

// == is the comparison, with automatic type conversion
echo ($x == 5) . "<br>";
echo ($x == $y) . "<br>";

// == is the comparison, without automatic type conversion
echo ($x === $y) . "<br>";

echo ($x == $z) . "<br>";

// be careful, in PHP a true expression evaluates to 1
// and a false expression evaluates to null, so nothing gets printed for the next line except for the line break
echo ($x === $z) . "<br>";

// use if statement to see the results
if ($x === $z)
    echo "Equal with ===<br>";
else
    echo "Not equal with ===<br>";

// same principles for != (inverse of ==) and !== (inverse of ===)
if ($x != $z)
    echo "Not equal with !=<br>";
else
    echo "Equal with !=<br>";

if ($x !== $z)
    echo "Not equal with !==<br>";
else
    echo "Equal with !==<br>";

