<?php
echo "Enter coefficients a, b and c:\n";

$a = (int)readline();
$b = (int)readline();
$c = (int)readline();

echo $a . "\n";

$discrimination = pow($b, 2) - 4 * ($a * $c);

echo $discrimination . "\n";

$root1 = (int)(-$b + sqrt($discrimination)) / (2 * $a);
$root2 = (int)(-$b - sqrt($discrimination)) / (2 * $a);

echo "\nRoot1:\t$root1\nRoot2:\t$root2";