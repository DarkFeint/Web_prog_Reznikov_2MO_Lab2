<?php
$st = pow(2, 10);

echo $st;

echo "\n";

echo sqrt(245);

echo "\n";

$mas = Array(4, 2, 5, 19, 13, 0, 10);

$sum_2 = 0;

foreach ($mas as $elem)
{
    $sum_2 += pow($elem,2);
}

echo sqrt($sum_2);
?>