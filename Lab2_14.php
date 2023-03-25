<p>
    Работа с %
</p>

<?php
$a = 10;
$b = 3;
echo $a % $b;
if($a % $b == 0)
    echo "\n Делится";
else
{
    echo "\n Делится с остатком";
    echo "\n";
    echo $a % $b;
}

?>

<p>
    Работа со степенью и корнем
</p>

<?php
$st = pow(2, 10);
echo $st;
echo "\n";
echo sqrt(245);
echo "\n";

$array = Array(4, 2, 5, 19, 13, 0, 10);
$sum_sqrts = 0;
foreach ($array as $value)
    $sum_sqrts += pow($value,2);
echo sqrt($sum_sqrts);
?>

<p>
    Работа с функциями округления
</p>

<?php
echo round(sqrt(379), 0);
echo "\n";
echo round(sqrt(379), 1);
echo "\n";
echo round(sqrt(379), 2);
echo "\n";
$array_587 = Array('floor', 'ceil');
$array_587['floor'] = floor(sqrt(587));
$array_587['ceil'] = ceil(sqrt(587));
?>

<p>
    Работа с min и max
</p>

<?php
$max = max(4, -2, 5, 19, -130, 0, 10);
echo "\n $max";
$min = min(4, -2, 5, 19, -130, 0, 10);
echo "\n $min";
?>

<p>
    Работа с рандомом
</p>

<?php
echo rand(1,100);
$array_rand = Array();
for($i = 0; $i < 10; $i++)
    $array_rand[$i] = rand();
?>

<p>
    Работа с модулем
</p>

<?php
$a = rand();
$b = rand();
echo abs($a - $b);
$array_abs = array(1, 2, -1, -2, 3, -3);
for($i = 0; $i < count($array_abs); $i++)
    if($array_abs[$i] < 0)
        $array_abs[$i] = abs($array_abs[$i]);
?>

<p>
    Общее
</p>

<?php
$number = 30;
$array_all = array();
$count = 0;
for($i = 1; $i < $number; $i++)
    if($number % $i == 0)
        {
            $array_all[$count] = $i;
            $count++;
        }

echo $number;
foreach($array_all as $value)
        echo "\n $value";

$array_all_2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$count_2 = 0;
$sum = 0;
foreach($array_all_2 as $value)
{
    $sum += $value;
    $count_2++;
    if($sum > 10)
    {
        echo "\n$count_2";
        break;
    }
}
?>