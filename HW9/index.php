<?php

/*
1. Дан массив из n элементов, начиная с 1. Каждый следующий элемент равен (предыдущий + 1). 
Но в массиве гарантированно 1 число пропущено. Необходимо вывести на экран пропущенное число.
Примеры:
[1, 2 ,3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16] => 11
[1, 2, 4, 5, 6] => 3
[] => 1
*/

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16];
$array1 = [1, 2, 4, 5, 6];
$array2 = [];

function searchLostNumberInArray(array $array)
{
    foreach ($array as $key => $value) {
        if ($key + 1 !== $value) {
            echo "The lost number is: " . ($key + 1) . "<br>";
            break;
        }
    }
    if (empty($array)) {
        echo "The lost number is: 1 <br>";
    }
}

searchLostNumberInArray($array);
searchLostNumberInArray($array1);
searchLostNumberInArray($array2);


function searchLostNumberInArray2(array $array)
{
    if ($array[0] == 0) {
        echo "The lost number is: 1 <br>";
    } else {
        $arrayFull = range($array[0], $array[count($array) - 1]);
        $array_lost = array_diff($arrayFull, $array);
        echo "The lost number is: " . current($array_lost) . "<br>";
    }
}
searchLostNumberInArray2($array);
searchLostNumberInArray2($array1);
searchLostNumberInArray2($array2);
