<?php
print "<h2>Operator Pembanding</h2>";

$x = 6;
$y = 2;

//menggunakan operator pembanding lebih besar
$z = $x > $y;
echo "$x > $y: $z";
echo "<br>";

//menggunakan operator pembanding lebih kecil
$z = $x < $y;
echo "$x < $y: $z";
echo "<br>";

// sama dengan
$z = $x == $y;
echo "$x == $y: $z";
echo "<br>";

// tidak sama dengan
$z= $x != $y;
echo "$x != $y: $z";
echo "<br>";

//lebih besar sama dengan
$z = $x >= $y;
echo "$x >= $y: $z";
echo "<br>";

//lebih kecil sama dengan
$z = $x <= $y;
echo "$x <= $y: $z";
echo "<br>";

?>