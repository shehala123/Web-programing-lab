<?php

$name=["Ram","Arun","Mohan","Zainab","Kiran"];



echo "<h2> Printing using print_r</h2> ";

print_r($name);
echo "<br>";
echo "<h2> Sorting using asort() </h2>";

asort($name);
print_r($name);
echo "<br>";

arsort($name);

echo "<h2> Sorting using arsort()</h2>";
arsort($name);

print_r($name);

?>