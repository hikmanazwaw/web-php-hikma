<?php
print "<h2>Operator Bitwise</h2>";

$x = 60;
$y = 13;

//bitwise AND
$z = $x & $y;
echo "$x & $y = $z";
echo "<br>";

//bitwise OR
$z = $x | $y;
echo "$x | $y = $z";
echo "<br>";

//bitwise XOR
$z = $x ^ $y;
echo "$x ^ $y = $z";
echo "<br>";

//shift left
$z = $x << $y;
echo "$x << $y = $z";
echo "<br>";

//shift right
$z = $x >> $y;
echo "$x >> $y = $z";
echo "<br>";
?>