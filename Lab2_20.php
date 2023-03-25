<?php
$mas_1 = [98, 85, 16, 83, 33, 85, 83, 94, 19, 97];

$med = array_sum($mas_1) / count($mas_1);

echo "\n" . $med;


echo "\n" . array_sum(range(1, 100));

echo "\n";

$mas_2 = [50, 51, 97, 28, 15, 58, 90, 68, 57, 31];

$mas_2 = array_map('sqrt', $mas_2);

print_r($mas_2);

echo "\n";

$mas_3 = array_combine(range('a', 'z'), range(1, 26));
$c = 1;

print_r($mas_3);

echo "\n";

$str = "1234567890";

$mas_4 = str_split($str, 2);

echo array_sum($mas_4);
?>