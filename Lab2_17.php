<?php
$mas_1 = array();

for($i = 0; $i < 5; $i++)
{
    $mas_1[$i] = str_repeat("x", $i + 1);
}

print_r($mas_1);

echo "\n";

function arrayFill($elem, $count)
{
    $mas = array();

    if ($count > 0)
    {
        for($i = 0; $i < $count; $i++)
        {
            $arr[$i] = $elem;
        }
    }

    return $mas;
}
$mas_2 = arrayFill('x',5);

print_r($mas_2);

echo "\n";

$mas_3 = [[1, 2, 3], [4, 5], [6]];

$sum = 0;

for($i = 0; $i < count($mas_3); $i++)
{
    $sum += array_sum($mas_3[$i]);
}

echo $sum . "\n";

$mas_4 = array();

$el = 0;

for($i = 0; $i < 3; $i++)
{
    $row = array();
    for($j = 0; $j < 3; $j++)
    {
        $row[$j] = $i * 3 + $j + 1;
    }
    $mas_4[$i] = $row;
}

print_r($mas_4);

echo "\n";

$mas_5 = [2,5,3,9];

$result = $mas_5[0] * $mas_5[1] + $mas_5[2] * $mas_5[3];

echo $result . "\n";


$user = array(
    'name' => 'Hugh', 
    'surname' => 'Mungus', 
    'patronymic' => '-');

echo $user['surname'], " ", $user['name'], " ", $user['patronymic'], "\n", "\n";


$date =array (
    'year' => '2023', 
    'month'=>'03' , 
    'day'=>'24');
echo $date['year'],'-',$date['month'], "-",$date['day'], "\n", "\n";


$arr = ['a', 'b', 'c', 'd', 'e'];

echo count($arr) . "\n";

echo end($arr), " ",prev($arr4);
?>
