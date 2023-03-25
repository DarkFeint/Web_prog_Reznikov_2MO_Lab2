<?php
$a = rand();

echo $a;

$b = rand();

echo $b;

echo abs($a - $b);

echo "\n";

$mas = array(1, 2, -1, -2, 3, -3);

for($i = 0; $i < count($mas); $i++)
{
    if($mas[$i] < 0)
    {
        $mas[$i] = abs($mas[$i]);
    }
}

print_r($mas);
?>