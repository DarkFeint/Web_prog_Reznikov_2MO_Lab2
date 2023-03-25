<?php
function increaseEnthusiasm($string)
{
    return $string .= "!";
}

$st = "Hello, world";

echo increaseEnthusiasm($st);

echo "\n";

function repeatThreeTimes($string)
{
    return str_repeat($string, 3);
}

echo repeatThreeTimes($st);

echo "\n";

echo increaseEnthusiasm(repeatThreeTimes($st));

echo "\n";

function cut($string, $symbols = 10)
{
    
    return substr($string, 0, $symbols);

}

echo cut($st, 10);

echo "\n";

function Recursion($mas)
{
    echo array_shift($mas);

    echo "\n";

    if (count($mas) > 0)
    {
        return Recursion($mas);
    }
}

$mas = array(1,2,3,4,5,6,7,8,9,10);

Recursion($mas);


$num = 483;
function Sum_of_Numbers($num)
{
    $mas = str_split($num, 1);

    $sum = array_sum($mas);

    if($sum > 9)
    {
        return Sum_of_Numbers($sum);
    }
    else
    {
        return $sum;
    }
}

echo "\n";

echo Sum_of_Numbers($num);
?>