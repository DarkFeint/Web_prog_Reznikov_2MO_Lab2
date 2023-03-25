<?php
function exp_many($a, $b)
{
    if($a + $b > 10)
    {
        return true;
    }
    else
    {
        return false;
    }
}


function exp_equal($a, $b)
{
    if($a === $b)
    {
        return true;
    }
    else
    {
        return false;
    }
}


$test = rand(0, 30);
if(!$test)
{
    echo "верно \n";
}

echo "\n";

$age = rand (1, 200);

echo $age, " ";

if ($age > 99 || $age < 10)
{
    if ($age >99)
    {
        echo'Число больше 99';
    }
    else
    {
        echo 'Число меньше 10';
    }
}
else
{
  $mas = str_split($age, 1);

  $sum = array_sum($mas);

  if ($sum <= 9)
  {
    echo 'Cумма цифр однозначна';
  }
  else
  {
    echo 'Cумма цифр двузначна';
  }
}


$arr = [1,6,5];

if(count($arr5) == 3)
{
    echo "\n" . array_sum($arr5);
}
?>