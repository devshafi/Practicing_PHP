<?php

// to output anything in php we use echo statement
// echo allows html markup inside it
echo "This is my country<br>";
echo "<h2>My country is beautiful</h2>";

// echo allows comma seperated concatination
$where = "rain";
$what = "walking";
echo "I "," like ",$what," in the ",$where,"<br>";

// another way of printing variable with text

echo "I like " . $what . " in the " .$where. "<br>";

// print state can also be used instead of echo in same manner

// to output anything in php we use echo statement
// echo allows html markup inside it
print "This is my country<br>";
print "<h2>My country is beautiful</h2>";

// print does not allow comma seperated concatination
$where = "rain";
$what = "walking";
// print "I "," like ",$what," in the ",$where,"<br>"; // error

// another way of printing variable with text

print "I like " . $what . " in the " .$where. "<br>";

