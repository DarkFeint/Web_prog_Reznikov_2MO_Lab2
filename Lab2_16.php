<?php
function increaseEnthusiasm($a)
{
    return $a .= "!";
}
$b = "I'm Matob";
echo increaseEnthusiasm($b);

function repeatThreeTimes($a)
{
    $j = $a;
    for($i = 0; $i < 2; $i++)
        $j .= $a;
    return $j;
}
echo "\n";
echo repeatThreeTimes($b);
echo "\n";
echo repeatThreeTimes(increaseEnthusiasm($b));

function cut($a, $d = 10)
{
    $j = "";
    for($i = 0; $i < $d; $i++)
        $j .= $a[$i];
    return $j;
}
echo "\n";
echo cut(repeatThreeTimes($b), 15);

/*
$array_functions = array(1,2,3,4,5,6,7,8,9,10);
function recursiveOutput($a)
{
    echo $a[0]."\n";
    array_slice($a, 0, 1);
    if(count($a) > 0)
        return recursiveOutput($a);
} 
recursiveOutput($array_functions); */

$number_functions = 37;
function sumNum($a)
{
    $arr = str_split($a, 1);
    $result = array_sum($arr);
    if($result > 9)
        return sumNum($result);
    else
        return $result;
}

echo "\n";
echo sumNum($number_functions);
?>