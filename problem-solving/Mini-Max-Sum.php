<?php

function minMaxSum($arr){
    $sums = [];
    
    for($i=0 ; $i< 5;$i++){
        //toda vez que entrar no for ele captura o array passado por parametro
        $array = $arr;

        //mata o valor e chave dentro do array
        unset($array[$i]);

        //insere no array sums a soma de um array
        $sums[] = array_sum(array_map(null, $array));
    }
    //ordena o array do menor para o maior sem desorganizar as chaves
    sort($sums);
    //retira o primeiro valor do array e joga na variavel $one OBS ele retira o valor do array original então cuidado qnd for manipular [1,2,3,4,5] o original ficara assim: [2,3,4,5]
    $one = array_shift($sums);
    // echo PHP_EOL;
    //a mesma coisa do array_shift porem eles faz com o valor final do array
    $last = array_pop($sums);
    // echo PHP_EOL;
    // var_dump($somas);
    return $one . " " . $last;
}

echo minMaxSum([7,69,2,221,8974]); 
//verificar o tanto de mémoria usada em megabytes
// echo memory_get_usage() / 1024 /1024;