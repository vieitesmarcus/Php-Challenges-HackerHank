<?php

/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function compareTriplets(array $a, array $b) {
    // Write your code here
    $result = [0, 0];
    foreach($a as $key => $value){
        // print_r($key); debug
        if($a[$key] > $b[$key]){
            $result[0] += 1;
        }
        if($a[$key] == $b[$key]){
            continue;
        }
        if($a[$key] < $b[$key]){
            $result[1] += 1;
        }
    }
    return $result;
    
}

$a = [17,28,30];
$b = [99,16,8];

$result = compareTriplets($a, $b);

echo $saida = implode(" ", $result);

