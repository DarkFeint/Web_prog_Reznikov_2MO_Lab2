<?php
$fig = 30;

echo $number;

$mas_div = array();

for($i = 1; $i < $fig; $i++)
{
    if($fig % $i == 0)
        {
            array_push($mas_div, $i);
        }
}

print_r($mas_div);

$mas = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$sum = 0;

$i = 0;

while ($sum <= 10)
{
    $sum += $mas[$i];
    $i++;
}

echo $i++;

?>