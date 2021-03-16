<?php
/*
4**. Реализовать на РНР сортировку слиянием (не копируя готовое :) )
*/

// Попробовал реализовать после лекции, у меня получился жуткий монстр. 
// Настоящие чудовище сортировки))  видно не совсем понял смысл..


$array = [2, 4, 7, 1, 9, 3, 10, 6, 8, 5];

function prepareArray($array)
{
    $arrayCount = count($array);
    $newArrays = [];

    for ($i = 0; $i < $arrayCount; $i++) {
        $newArrays[$i] = [$array[$i]];
    }
    return $newArrays;
}

function mergeSort($array)
{
    $arrayCount = count($array);
    if ($arrayCount <= 1) {

        foreach ($array[0] as $key => $value) {
            if ($value == 'delete it') {
                unset($array[0][$key]);
            }
        }
        return array_reverse($array);
    }
    $newArrays = [];
    if ($arrayCount % 2 === 0) {
        //echo 'Четное';
    } else {
        //echo 'Нечетное';
        $array[] = ['delete it'];
    }
    for ($i = 0; $i < $arrayCount; $i += 2) {
        $newArrays[] = array_merge($array[$i], $array[$i + 1]);
    }
    $newArraysCount = count($newArrays);
    for ($i = 0; $i < $newArraysCount; $i++) {
        $count = count($newArrays[$i]);
        for ($j = 0; $j < $count; $j++) {
            for ($m = 0; $m < $count; $m++) {
                if ($newArrays[$i][$j] > $newArrays[$i][$m]) {
                    $temp = $newArrays[$i][$j];
                    $newArrays[$i][$j] = $newArrays[$i][$m];
                    $newArrays[$i][$m] = $temp;
                }
            }
        }
    }
    $sortArray =  mergeSort($newArrays);
    return $sortArray;
}

$arrayForSort = prepareArray($array);
$arr1 = mergeSort($arrayForSort);
var_dump($arr1);

// Каноничная версия сортировки)

function merge (array $left, array $right)
{
    $array = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) {
            $array[] = $right[0];
            $right = array_splice($right, 1);
        } else {

            $array[] = $left[0];
            $left = array_splice($left, 1);
        }
        //var_dump($left);
        //var_dump($right);
        //var_dump($array);
    }
    // Вот тут я подсмотрел решение, (у меня терялась часть массива), а тут все красиво
    while (count($right) > 0) {
        $array[] = $right [0];
        $right = array_slice($right, 1);
    }
    while (count($left) > 0) {
        $array[] = $left [0];
        $left = array_slice($left, 1);
    }

    return $array;
}

//$left = [2, 4, 7, 1, 9,];
//$right = [3, 10, 6, 8, 5];
// $left = [2, 4,];
// $right = [3, 10,];
//var_dump(merge($left, $right));

$array = [2, 4, 7, 1, 9, 3, 10, 6, 8, 5,];

function mergeSortV2(array $array){
    if(count($array) === 1){
        return $array;
    }
    $leftArray = [];
    $rightArray = [];
    $centerArray = floor(count($array) /2);

    $leftArray = array_slice($array, 0 , $centerArray);
    $rightArray = array_slice($array, $centerArray);

    $leftArray = mergeSortV2($leftArray);
    $rightArray = mergeSortV2($rightArray);
    // var_dump($leftArray);
    // var_dump($rightArray);
    // echo $centerArray;
   return merge($leftArray, $rightArray);
}

var_dump(mergeSortV2($array));

