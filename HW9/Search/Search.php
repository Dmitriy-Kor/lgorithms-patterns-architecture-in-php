<?php
/* 
3*. Доработать алгоритм бинарного поиска для нахождения кол-ва повторений в массиве.
Сложность O(logn) не должна измениться.
Учтите, что массив длиной n может состоять из одного значения [4, 4, 4, 4, ...(n)..., 4]
*/

function binarySearch($myArray, $num)
{

    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;
    $copy = []; // массив для дубликатов с ключами
    while ($start <= $end) {

        $base = floor(($start + $end) / 2);

        if ($myArray[$base] == $num) {
            // for ($i = $base; $i < $end; $i++) {
            //     if ($myArray[$base] == $myArray[$i]) {
            //         $copy[] = $myArray[$i];
            //     }
            // }
            $arrTemp = array_slice($myArray, $start, $end, true);
            //var_dump($arrTemp);
            foreach ($arrTemp as $key => $value) {
                if ($num == $value) {
                    $copy[$key] = $value; 
                }
            }

            var_dump($copy);
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    var_dump($copy);
    return null;
}

$array = [1, 2, 3, 4, 4, 4, 4, 4, 4, 5, 6, 7, 8, 8, 8, 9, 10];
//$array = [8,8,8,8,8,8,8];
$num = 8;
binarySearch($array, $num);
