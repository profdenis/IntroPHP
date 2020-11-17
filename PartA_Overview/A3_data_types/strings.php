<?php
$name = "Alice";
echo $name;
echo "<br>";

// the . is the string concatenation
echo "Hello, " . $name . "!<br>";

// with a double-quoted string, we have variable expansion, so the variable's value in inserted in the string
echo "Hello, $name!<br>";

// with single quotes, the string is a raw-string, no expansion done, even special characters will not be expanded
echo 'Hello, $name!\n<br>';
