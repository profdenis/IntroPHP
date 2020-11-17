<?php
$fruits = array("apple", "banana", "orange", "blueberry", "strawberry");
echo "for loop<br>";
for ($i = 0; $i < sizeof($fruits); $i++) {
    echo "\$fruits[$i] = $fruits[$i]<br>";
}

echo "<br>while loop<br>";
$i = 0;
while ($i < sizeof($fruits)) {
    echo "\$fruits[$i] = $fruits[$i]<br>";
    $i++;
}

echo "<br>foreach loop<br>";
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}
