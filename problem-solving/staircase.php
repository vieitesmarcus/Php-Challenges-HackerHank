<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    // Write your code here
    $montanha = "";
    $diminui = $n-1;
    $espaco = " ";
    for($i = 1; $i < $n+1; $i++){
        
        echo $espaco = str_repeat(" ", $diminui--);
        echo $montanha = str_repeat("#", $i);
        echo PHP_EOL;
        
        // echo $juntos;
    }
}

$n = intval(trim(fgets(STDIN)));

staircase($n);
