<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $positive = 0;
    $negative = 0;
    $zero = 0;
    $tamanho = count($arr);
    foreach($arr as $value){
        if($value > 0){
            $positive += 1;
        }
        if($value < 0){
            $negative += 1;
        }
        if($value === 0){
            $zero += 1;
        }
    }
    echo $positive = number_format($positive / $tamanho,6);
    echo PHP_EOL;
    echo $negative = number_format($negative / $tamanho, 6) ;
    echo PHP_EOL;
    echo $zero = number_format($zero / $tamanho , 6) ;
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
