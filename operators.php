<?php
$a = 10;
$b = 5;

echo "<pre>";

echo "Arithmetic operators\n";
echo "-------------------\n";
echo "$a + $b = " . ($a + $b) . "\n";
echo "$a - $b = " . ($a - $b) . "\n";
echo "$a * $b = " . ($a * $b) . "\n";
echo "$a / $b = " . ($a / $b) . "\n";
echo "$a % $b = " . ($a % $b) . "\n\n";

echo "Comparison operators\n";
echo "---------------------\n";
echo "$a == $b : " . (($a == $b) ? 'true' : 'false') . "\n";
echo "$a != $b : " . (($a != $b) ? 'true' : 'false') . "\n";
echo "$a >  $b : " . (($a > $b) ? 'true' : 'false') . "\n";
echo "$a <  $b : " . (($a < $b) ? 'true' : 'false') . "\n";
echo "$a >= $b : " . (($a >= $b) ? 'true' : 'false') . "\n";
echo "$a <= $b : " . (($a <= $b) ? 'true' : 'false') . "\n\n";

echo "Logical operators\n";
echo "------------------\n";
echo "($a > 0) && ($b > 0) : " . ((($a > 0) && ($b > 0)) ? 'true' : 'false') . "\n";
echo "($a > 0) || ($b < 0) : " . ((($a > 0) || ($b < 0)) ? 'true' : 'false') . "\n";
echo "!($a == $b)          : " . ((!($a == $b)) ? 'true' : 'false') . "\n";

echo "</pre>";
?>