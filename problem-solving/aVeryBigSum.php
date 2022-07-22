<?php

/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar) {
    // algumas semanas atras eu escrevi assim, sem uso de função.
    // $result = 0;
    // foreach($ar as $value){
    //     $result += $value;
    // }

    //mas assim é bem mais simples
    return array_sum($ar);
}

$ar = [1000000001,1000000002, 1000000003, 1000000004, 1000000005];
echo $result = aVeryBigSum($ar);

