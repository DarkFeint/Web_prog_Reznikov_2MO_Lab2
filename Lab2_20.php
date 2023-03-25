<?php
$arr6 = [5,67,8,2,45,3,1];
$result = array_sum($arr6) / count($arr6);
echo "\n" . $result;


echo "\n" . array_sum(range(1, 100));

echo "\n";

$arr7 = [4,7,63,77,23,1];
function sq($a)
{
    return sq($a);
}
$arr7 = array_map('sqrt', $arr7);
foreach($arr7 as $v)
    echo $v . "\n";


$arr8 = array_combine(range('a', 'z'), range(1, 26));
$c = 1;
while($c <= 26)
{
    echo key($arr8) . "\n" . current($arr8) . "\n";
    next($arr8);
    $c++;
}  


$a = "1234567890";
$arr9 = str_split($a, 2);
echo array_sum($arr9);
?>