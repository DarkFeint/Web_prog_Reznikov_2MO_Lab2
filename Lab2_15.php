<?php
function printStringReturnNumber()
{
    echo "Возвращаемое значение: ";
    return rand();
}
$my_num = printStringReturnNumber();
echo $my_num;
?>