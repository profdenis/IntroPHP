<?php
$x = 2;
$y = 5;
$z = "5a";

echo "comparing number with number<br>";
if ($x < $y)
    echo "$x less than $y<br>";
else
    echo "$x not less than $y<br>";

if ($x > $y)
    echo "$x greater than $y<br>";
else
    echo "$x not greater than $y<br>";

echo "comparing number with string<br>";
if ($x < $z)
    echo "$x less than $z<br>";
else
    echo "$x not less than $z<br>";

if ($x > $z)
    echo "$x greater than $z<br>";
else
    echo "$x not greater than $z<br>";