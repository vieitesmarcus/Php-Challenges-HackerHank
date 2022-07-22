<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    $i = 0;
    $j = count($arr) - 1;
    $left = 0;
    $right = 0;
    foreach($arr as $key => $value){
        $left += $arr[$key][$i++];
        $right += $arr[$key][$j--];
    }
    $result = $left - $right;
    
    return abs((int)$result);
}

// $fptr = fopen("php:stdin", "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

echo $result = diagonalDifference($arr);

// fwrite($fptr, $result . "\n");

// fclose($fptr);

echo PHP_EOL;
echo PHP_EOL;
echo memory_get_usage() / 1024/ 1024; // VERIFICAR USO DA MEMORIA, SEMPRE CUIDE DESSA PARTE PARA NÃO DEIXAR A APLICAÇÃO LENTA

/* testes feito abaixo: 
primeiro input: 99

depois copia tudo abaixo e cola, depoi pressione o enter e o resultado tem q ser 19600;

100 -73 28 71 -35 -94 11 7 -5 31 57 -4 -35 -33 86 71 84 81 6 26 -85 99 -48 -77 58 77 64 34 37 -72 -47 -94 60 12 -23 81 63 52 -76 23 62 11 17 -98 -96 66 18 -52 63 16 55 -38 98 46 83 34 -52 90 -47 -32 40 81 -40 -19 54 44 -22 71 52 98 16 -7 8 -67 -90 -15 -19 -60 -13 -37 -79 -19 -3 -17 52 98 -80 96 -1 73 60 96 -22 68 68 -27 -37 -50 -100
90 100 98 -32 -96 -90 63 -74 25 56 6 45 -20 -83 66 24 22 -90 -22 43 -34 -25 10 -89 18 -16 66 -34 -29 47 63 -20 19 -86 -71 18 -90 28 -31 -23 -3 35 -26 -14 -80 29 63 60 -57 76 -89 23 75 89 -51 70 -99 11 -46 -73 -16 -71 -74 -92 70 -51 43 -47 -3 -17 -32 100 -30 -11 64 76 8 -87 -66 -29 5 -9 99 -49 -76 77 -57 -93 69 40 -77 -45 -71 6 72 -39 94 -100 -6
-13 -96 100 -62 92 -47 38 -46 74 -14 46 78 -83 46 45 13 17 -10 -26 -24 38 91 62 51 -7 -4 -88 45 5 48 95 -36 15 35 6 -23 15 -77 -37 -7 -29 -97 44 -12 78 -43 61 63 -62 -96 12 -74 -33 -4 79 -15 39 -28 -12 90 57 44 -6 11 44 -43 -16 -27 -67 -18 34 -7 -46 -8 11 43 23 88 -84 89 -45 63 -84 0 -25 93 -86 57 73 88 -10 46 -29 -61 -90 -2 -100 -22 -10
82 -7 -26 100 -14 -82 -94 89 -9 34 72 -17 84 62 -23 -63 13 11 -5 -42 -13 48 97 -39 71 48 46 -8 -80 28 -67 64 44 13 -8 -25 -87 11 -45 87 30 -47 25 58 -73 -74 1 -56 -87 27 53 -87 6 36 75 -86 -12 98 15 89 -47 -12 8 -33 -69 28 -35 82 38 -81 -48 54 24 -38 -47 -43 -92 -47 -53 86 78 19 9 -69 19 40 66 -20 -48 -15 -27 -58 -12 -36 -89 -100 -20 30 -51
-24 38 49 21 100 56 -18 21 29 -11 2 10 26 -65 -53 -89 32 100 -54 13 -1 58 -25 23 61 38 66 57 -62 63 5 -83 22 19 -76 75 -89 31 -53 -79 83 -88 7 -39 -22 -22 30 81 -4 72 96 100 -72 11 -55 83 -5 32 19 19 18 5 78 -89 11 66 9 -34 25 -62 -47 -46 71 89 -34 -81 91 36 -45 -68 -53 -40 -41 -84 37 67 -85 3 53 -28 1 98 74 61 -100 58 -75 -59 16
37 -43 -32 20 -75 100 -91 -91 -65 89 65 74 84 82 85 2 16 -62 19 86 -14 91 74 -92 -79 83 8 -29 -53 -21 95 55 -24 -27 -94 -46 67 92 -19 86 -25 -20 95 0 89 9 62 -6 -12 -37 74 90 -89 50 -16 89 -73 -36 59 63 -7 54 20 -78 -90 58 26 -69 66 100 78 -34 99 58 -16 12 18 -64 74 88 -95 9 7 9 -29 -10 -57 54 97 -80 -23 -54 10 -100 96 -51 -84 51 19
66 -40 86 16 89 -88 100 -24 5 26 59 -43 -15 35 42 -77 74 65 -20 40 54 -38 27 -60 2 -11 -66 -63 -3 80 -78 97 -45 -36 -56 65 24 20 -18 -75 -20 -67 -81 -81 -55 -40 -77 95 34 82 30 26 60 44 99 -94 45 -54 27 8 20 51 -25 30 26 -87 -7 17 -84 62 7 -98 -61 -24 59 -62 94 79 -19 37 -63 -27 36 17 -34 -42 62 14 5 -88 -65 70 -100 -35 -16 -92 76 97 -19
-8 32 9 70 -13 -48 44 100 -72 -48 -28 -60 27 -37 91 -23 -51 -29 7 1 15 -79 -44 48 -52 -86 -92 77 -3 -82 53 9 63 0 94 20 96 -14 -92 -30 34 -66 98 23 0 -63 -63 16 -76 -49 -65 -40 -30 25 45 45 -37 21 85 90 98 -48 -66 -3 -62 30 100 -80 77 97 90 34 16 -46 -71 26 49 79 64 51 -78 -20 -82 -23 51 37 -93 54 -88 9 -89 -100 1 -71 -43 95 66 -9 6
-9 -26 57 -57 68 10 91 -52 100 52 -48 56 47 3 -49 -54 65 -87 8 -80 -80 69 -52 43 -70 48 80 75 18 84 21 31 87 92 -29 6 -83 4 40 63 88 21 11 -61 56 -26 87 -96 -70 22 30 -93 72 -15 91 29 79 -68 11 11 -51 -36 42 -38 92 26 97 -82 37 99 64 -13 38 -73 -28 -88 -81 -31 -78 9 11 16 36 86 -66 69 64 -97 -47 94 -100 -97 24 -26 -72 53 -60 54 -80
-71 -85 38 1 56 83 -33 -94 -44 100 -92 -64 52 86 -13 1 -99 -98 72 42 -73 23 47 -40 -87 72 -100 -63 54 71 64 26 -39 56 -95 99 96 89 -71 -71 -100 -73 -25 -97 9 -15 -55 -61 67 -93 79 -98 66 -24 -86 -54 17 87 -87 6 -54 -67 48 -7 30 -100 -73 96 -35 -59 92 48 -97 -35 17 81 -30 -56 80 -61 -65 -97 -20 -94 51 62 -39 -24 -53 -100 -83 -54 3 -43 -57 -29 -87 81 23
-46 -71 59 -50 90 -69 -91 -22 -23 -53 100 25 -27 4 6 -9 -57 36 -16 87 -55 -51 29 -38 -100 -54 26 -72 14 81 20 82 -57 -63 97 -62 97 45 -57 -9 46 -67 75 52 42 -100 -15 -3 -55 -17 -53 53 -52 -95 49 -22 -65 -32 -26 99 -66 17 -29 -53 54 -63 -19 -58 -52 61 72 -75 18 -24 -9 -5 87 27 -89 -24 -60 66 -8 36 -62 26 59 -2 -100 -49 -66 61 -100 -52 99 93 33 75 -73
-6 70 99 16 31 40 -68 8 -64 98 -84 100 73 21 -51 -28 -46 -26 0 -1 97 -97 83 62 -24 -81 21 33 -66 80 96 -99 2 34 -41 -59 85 27 76 89 -17 19 52 71 84 4 -60 -61 51 75 -83 37 66 2 8 62 45 3 38 77 23 -16 -92 83 26 87 -29 -66 -5 97 13 41 -94 41 -59 -21 -17 -8 -42 -8 -16 43 50 -99 -68 -77 63 -100 58 23 44 2 -66 35 -43 -60 -70 -62 -5
99 -86 47 -86 26 -76 19 -72 64 50 -10 -7 100 91 38 23 94 49 85 7 -7 93 -78 31 -42 12 72 -37 -3 4 46 -3 17 26 -25 69 73 -16 -22 -55 8 -80 -45 -98 3 6 4 20 -29 47 24 51 -59 16 -58 -94 -53 -60 -89 -76 -59 59 -54 12 93 2 -100 79 -29 -71 -11 -91 -99 -23 -24 -57 76 -68 -1 -31 57 -49 1 83 29 -68 -100 -12 81 -14 -90 -46 -75 8 -89 -94 38 -97 -72
-64 -100 36 -50 -45 -83 34 -29 -9 -91 36 40 -29 100 -66 12 67 34 -86 55 -12 68 79 75 -70 82 46 31 -58 -78 -30 -27 -7 91 40 87 -87 -43 -87 34 57 -37 -38 -16 61 57 20 63 -2 94 -34 -3 66 98 -76 42 -70 66 57 -42 45 -35 13 -59 50 8 57 -6 2 6 -32 -90 12 57 -5 -14 -8 18 -24 -42 80 7 80 11 17 -100 12 -40 96 50 14 -23 86 -12 85 -40 43 26 42
-19 -16 -68 72 -60 -72 -60 -57 -38 98 32 -73 23 62 100 31 -90 97 -97 46 -98 -84 64 -51 -7 62 7 -68 -40 -55 -72 -88 -16 30 -69 -2 -78 31 80 -92 52 91 28 -26 -81 -40 -90 10 -78 -10 -17 92 -7 -9 46 2 -13 69 -52 -68 18 -27 95 41 10 -73 16 -56 1 24 -95 -96 88 33 -30 -48 -6 -71 14 -83 -79 96 42 71 -100 -63 -79 73 64 10 92 76 45 42 71 -97 88 -41 42
-55 57 -86 -95 75 -24 -48 53 -40 75 -39 -16 -21 -43 9 100 99 74 6 77 58 15 72 9 -22 -7 42 -48 75 46 45 71 -49 23 42 -50 99 61 -46 -6 45 96 95 9 -93 -4 93 -37 29 -35 36 -41 82 -42 -38 97 46 87 -79 -78 -19 -97 -26 -30 40 70 -9 -74 -26 71 -49 80 -44 66 10 46 6 -64 -16 59 76 9 -39 -100 -53 -94 9 -1 -5 77 -98 55 62 63 96 -17 62 -91 -74
-25 -36 45 87 -98 -64 -95 -79 15 -79 -3 15 -46 48 -34 -36 100 -8 -3 -17 55 85 78 49 34 14 -68 -35 -91 -62 -61 10 -20 -36 81 -48 -2 -53 -91 0 70 39 47 -19 83 -58 10 -58 11 -8 -59 -51 -14 8 87 8 -50 -91 -53 58 77 8 -64 96 42 -57 -81 39 47 98 11 -9 -10 35 -74 -64 -83 -92 -87 -99 -13 30 -100 -78 16 -1 47 -24 -39 32 75 58 30 -70 57 -86 -49 -37 -58
85 97 12 -76 65 4 -81 -72 13 -7 -64 21 30 34 -15 15 23 100 -44 39 47 7 -57 -55 -20 11 4 54 71 -68 -84 -58 -68 37 -61 -61 -78 49 -3 -20 -26 -45 -40 -21 28 -20 93 10 39 -5 60 47 -43 6 8 10 85 -86 -66 -1 -15 -16 -69 -26 31 -48 52 -50 -84 86 12 -18 -60 -97 46 20 97 -93 -41 40 56 -100 -31 -66 -91 -40 -70 -14 93 -16 100 96 -99 -78 -39 100 79 -39 -69
81 0 94 -98 20 -19 3 25 -25 -41 -17 -81 -92 -67 48 -85 16 -91 100 88 -54 -27 -18 -33 38 -35 64 -34 -55 -17 45 16 94 -23 -49 -44 -7 -16 9 -85 -61 100 -65 35 -97 -99 46 -83 -92 -34 44 61 -27 -72 71 -69 -74 -5 -66 22 43 -92 -79 -97 97 47 -63 -5 -13 -58 -9 -84 53 85 79 92 44 -5 42 7 -100 -35 -73 46 -61 96 98 -94 83 49 77 5 66 -1 -36 -91 82 -61 -45
-38 -72 -16 83 -5 -70 17 57 -18 -8 9 67 18 54 14 -38 -50 -36 60 100 -15 -86 46 -56 65 -42 -38 -82 -58 -27 45 29 97 -1 46 -18 -28 -21 -48 -77 95 -92 90 78 80 1 56 -10 -7 45 -64 -49 -29 -83 59 97 40 -97 -92 83 46 -99 -24 19 30 62 82 98 33 -90 -53 -61 22 20 -82 -35 -81 -29 -85 -100 -92 -30 80 -34 -14 32 -99 30 -54 22 -95 20 61 75 67 34 57 26 -35
-74 -75 48 44 -69 73 -29 -39 -64 33 -48 -23 -2 62 85 -25 39 -14 -12 53 100 10 -48 42 85 -59 -32 -6 18 18 -64 -64 0 -63 -30 -73 -96 -6 67 70 28 -18 -65 11 -39 -53 -19 46 -31 -93 -54 36 88 52 15 11 -27 -15 -97 -25 27 -17 94 69 -65 -39 -57 84 -73 -25 52 -96 -42 48 -42 27 10 2 -100 -46 17 -38 -21 90 6 68 -36 -63 -42 66 29 -72 -62 -94 43 29 -77 85 45
-84 91 -85 9 67 -12 -8 -68 12 32 87 -26 -27 -73 25 40 -14 -86 -63 61 -19 100 95 85 -53 -42 46 93 -87 7 53 -16 -77 78 77 -15 9 -83 -95 49 51 98 -49 74 65 -92 82 88 -43 76 74 -50 -58 -12 -8 -100 -50 61 26 20 -93 -67 -89 91 62 -4 -21 -96 90 -47 -95 -100 21 -75 -72 -6 17 -100 4 -39 -98 89 92 58 74 1 -27 -27 -3 48 -83 32 -80 -90 -31 82 89 37 -32
21 8 -56 -12 -78 83 -56 -22 64 57 -11 44 95 69 -11 -29 10 17 -19 28 -92 -39 100 15 79 -38 -20 -57 5 55 -68 46 45 -60 -97 65 3 5 -84 -97 57 28 46 -14 -33 69 65 -42 -84 -26 -96 -12 -2 -69 20 79 78 30 -45 63 -37 20 90 83 2 -17 -95 -53 55 20 31 18 -2 97 74 -4 -100 -28 -79 -45 -69 48 57 -48 13 76 17 -40 -98 35 -57 97 -39 12 11 52 -97 20 -41
-27 -45 -81 -96 -100 84 -42 56 -67 -53 69 -98 -78 -4 12 -24 47 -9 76 -6 74 -74 12 100 48 60 64 76 57 62 31 61 66 -34 -75 81 43 -62 -5 -5 97 -62 -100 -32 53 18 -43 -91 41 -100 4 10 -85 -8 -4 -65 39 -70 -63 94 45 12 25 0 -75 95 91 38 91 12 -84 15 -77 -31 35 -100 17 59 -12 -99 -5 16 17 -8 13 87 96 -97 -17 -10 -10 22 -23 67 -11 -30 41 88 45
52 -67 -4 45 43 -50 76 -12 94 -67 93 45 -57 27 -11 62 -54 31 3 -66 3 -56 66 42 100 42 -99 -1 12 58 -67 -69 -8 75 -74 75 -35 -83 -100 -64 -70 51 -68 4 -50 -9 -18 -83 -34 43 -14 84 86 -91 8 -11 37 2 -48 -29 -46 -14 -56 -87 -67 51 -90 80 -37 -61 3 52 -14 13 -100 -80 -66 -70 -69 -13 -24 -93 78 -57 43 -35 -10 -47 82 56 -9 -11 -7 -39 28 20 -19 -73 -64
-25 18 42 28 -72 -85 97 -29 -75 94 -23 6 -59 57 58 0 53 4 -53 46 97 46 -72 66 -36 100 54 75 5 50 -61 -93 -11 83 44 -2 -95 -79 83 83 94 -36 43 -32 42 32 -35 46 33 90 17 92 34 96 -21 2 -44 -70 67 -76 57 96 -56 -72 47 10 84 -15 -83 56 91 -95 50 -100 -81 -62 93 52 -52 3 -15 72 -19 40 51 -92 -31 -91 -22 53 -3 3 52 -89 -48 31 43 27 1
-95 -89 -97 -50 43 -62 9 -75 80 -63 90 48 10 -6 -2 4 -2 -94 -15 15 -68 89 65 -10 85 -3 100 -76 34 63 17 66 -13 -76 36 -41 100 -60 72 -49 20 95 88 5 -10 -33 -89 62 46 93 23 95 28 -27 -10 -70 32 39 -6 23 13 -27 28 -42 -77 -74 -38 97 -71 18 20 6 -100 69 95 19 -90 64 -96 11 75 41 22 -98 -90 -4 48 -3 50 4 -4 -64 57 64 91 61 -14 -51 36
70 -80 55 -20 -64 71 -62 88 84 -5 51 -15 -6 -99 -45 97 -56 51 93 -75 -67 33 -80 81 -11 96 14 100 23 -100 -79 -19 -71 41 77 -91 -58 73 -13 -89 37 -24 -43 28 93 3 19 40 87 6 37 -63 -18 8 68 -4 -89 15 -6 16 -66 -61 -44 48 17 -5 58 40 -27 -84 92 -100 68 23 36 -98 -98 15 19 -61 -6 -37 96 49 -67 10 49 -99 60 71 13 79 -27 -27 -73 17 -60 100 -39
-78 -28 36 -21 1 11 -66 -3 -49 83 48 27 88 -41 -76 7 -34 86 96 26 -73 13 94 -81 57 71 44 -10 100 50 84 73 28 -41 87 0 64 3 90 -58 3 12 39 11 -75 90 11 66 -85 -79 90 -58 -55 -59 95 -54 100 -83 -48 -54 77 9 62 -97 74 -89 -98 -53 -64 -93 -100 82 93 -92 37 86 34 -98 37 45 -99 -66 72 42 37 -28 61 24 38 23 14 -58 -19 -43 -12 7 27 -48 -31
73 -49 -31 -90 -93 59 -72 -21 -25 2 -33 95 -49 -97 10 -73 14 50 67 -81 -13 98 27 -93 -90 -35 -92 53 -59 100 53 -31 -47 -48 40 -14 -75 -23 -69 97 81 -48 -49 -38 24 82 -60 58 73 97 -59 51 -100 -52 -55 60 -61 -60 -37 -64 100 -88 52 36 -80 -51 -98 12 -19 -100 -28 -21 83 55 35 -90 -66 87 43 63 -8 -8 64 -40 -20 25 -46 -66 -92 -88 -1 -52 84 -81 -78 -77 27 6 34
-80 25 26 96 77 0 11 -46 9 56 -60 -77 1 14 45 -96 -39 17 6 -26 89 -45 47 -57 19 -34 -23 65 -38 -43 100 77 -95 29 72 -88 12 52 68 35 18 87 -54 7 -84 -13 -1 -3 96 18 13 -53 -3 36 86 -57 99 -84 46 -16 5 -61 -72 79 -72 -94 13 -79 -100 -43 95 -96 69 -32 -96 -82 9 -57 42 51 -30 0 -29 -90 -13 -2 -54 -47 -52 -10 -59 94 -98 31 83 21 39 -71 19
67 -15 8 36 -12 26 24 -80 -17 -33 -96 -47 16 -56 -15 -48 -90 97 -76 74 -74 8 40 29 -70 51 -19 -20 -54 33 35 100 28 79 -7 -89 -28 31 -41 96 -86 50 -2 89 68 94 -19 23 88 55 72 -86 -8 -72 1 -40 -21 -78 66 98 -35 -69 34 -12 77 9 -48 -100 -37 -46 -91 -45 64 -81 -72 -74 50 3 44 8 44 17 38 -90 -41 -11 -51 -39 94 35 -93 56 38 75 58 -95 54 -26 -60
-32 11 -12 20 41 -63 -62 -18 -51 17 73 -56 81 0 38 50 -35 -46 93 -1 -17 40 -17 23 -32 -46 -7 -88 65 62 23 -52 100 32 -59 49 11 1 -40 -78 -59 82 70 6 -55 9 -5 41 -53 -30 85 95 -16 -39 21 -1 35 -30 52 60 -61 -98 8 99 65 -25 -100 -67 12 71 90 -20 -61 100 95 -67 96 20 -45 33 82 89 -77 -73 13 96 14 -23 37 80 8 -37 -34 -85 7 -65 -99 -21 -7
10 87 94 90 -98 -64 -16 16 -25 -47 -4 34 -4 -90 -50 -45 -44 57 85 33 -41 -62 44 -12 -69 3 95 -53 68 -44 69 64 -52 100 20 20 -43 88 0 -40 74 47 -50 -19 36 31 35 -28 -64 -91 -56 16 20 15 2 -2 -78 -34 19 46 78 58 -50 -56 95 -100 20 -31 58 34 47 57 -69 9 -29 -18 -11 -60 98 13 -68 60 -67 96 16 90 -99 46 -93 -39 -19 -36 -48 88 67 9 -35 27 -40
36 81 20 -27 22 8 -24 -23 -94 -62 -77 50 -51 -93 -43 94 -71 -88 90 -65 -50 -13 84 -24 -89 35 -66 -58 81 93 -31 51 -48 -25 100 51 -82 -76 66 18 12 6 -88 -5 -50 6 -14 33 35 -44 27 13 91 90 64 18 20 -13 -47 -58 75 -35 -20 82 -100 51 97 79 55 49 43 15 -90 39 -39 76 96 78 71 11 -91 77 -64 20 17 -72 1 -29 55 59 70 -95 -47 -71 44 -47 98 -90 37
85 45 25 18 -78 92 6 56 -75 0 87 92 -34 -28 71 -33 40 83 -64 86 -73 -58 12 36 99 -49 51 -74 96 6 75 18 93 -63 -80 100 59 -66 21 26 13 -16 -50 100 78 49 47 98 -51 95 17 -11 9 -56 -69 23 42 -80 64 6 -39 -45 -85 -100 -81 41 -27 -27 48 -17 -89 62 14 22 14 68 3 -59 -83 15 -77 95 -20 -12 -31 -21 -86 -9 -95 -66 -94 98 -69 -78 68 50 -85 69 15
-65 -55 29 12 78 86 8 -22 -50 4 96 40 82 -92 63 -26 54 -43 79 72 -84 3 58 98 -94 -21 -71 -95 16 42 59 29 -51 -97 -37 -94 100 -88 -72 -1 11 58 43 11 -54 -69 70 -13 -77 71 23 20 37 69 -37 -80 -91 41 -35 -70 71 -59 -100 -75 -89 11 -12 20 -34 -39 -56 85 -68 100 -75 -99 -95 -52 68 -63 -81 -32 82 -4 46 -91 -31 -23 -66 100 18 -88 -39 22 -2 -62 64 37 -24
58 20 -64 65 -51 -3 41 -31 -61 16 57 24 66 37 -70 -27 91 -13 62 41 -73 -14 78 -58 -35 -31 62 89 51 -57 97 -5 38 -3 -84 79 -99 100 -13 10 38 -86 -20 -79 39 -23 70 -42 92 40 24 67 -53 -93 -21 -99 -70 -82 35 70 -7 -100 -13 -12 61 81 31 -2 12 -33 -83 75 37 -31 7 -16 88 60 96 47 -25 86 -29 1 -41 45 65 -21 -18 -27 48 100 86 -57 -83 49 -66 8 -87
-14 4 -90 42 -66 -35 66 18 -7 -30 -71 67 -53 -36 83 -48 -85 24 93 85 -21 96 57 -71 43 22 12 76 -22 41 14 -51 92 -35 51 70 95 -27 100 39 40 96 75 23 -4 -31 32 -92 -84 -70 90 67 9 -5 -90 92 -46 -67 -73 -16 -100 -66 65 54 -83 -73 39 -51 8 63 -33 -46 40 -31 48 -77 48 18 44 -83 -5 96 78 94 90 92 -88 -16 -94 8 -47 -30 59 -40 58 -49 11 -79 -75
-87 38 -10 -72 51 21 -27 68 14 -68 -44 77 75 28 -48 -93 -9 39 24 30 72 -25 91 -86 -53 54 66 -24 3 -97 -82 33 -29 -78 22 -14 62 -48 71 100 -85 71 -19 36 74 -87 -8 72 3 -97 80 12 -31 95 -26 71 -71 75 46 -100 -49 72 11 -27 87 51 57 -55 -16 5 79 89 44 -16 -68 1 -75 -14 -90 23 -73 64 -68 -40 -72 70 18 84 44 -58 -34 23 -97 61 -5 -44 95 85 74
28 -81 -50 29 93 -57 -98 86 -20 3 -59 -48 -35 -89 41 -88 -75 32 -50 24 86 12 94 -100 -78 -93 39 -18 60 -72 -49 53 -8 18 31 9 -30 -79 15 10 100 89 -22 -76 -33 36 79 17 -9 66 -49 5 -83 -58 -26 -66 -39 -50 -100 -56 -57 -50 42 -14 -50 55 57 -81 -79 -15 81 82 -12 -14 -42 -75 20 13 45 52 -93 -78 -54 -67 24 -22 0 56 68 -77 -45 83 -14 -71 46 41 94 -74 61
33 87 25 96 8 -59 95 19 -5 -36 28 34 29 -47 -42 -80 14 -70 -82 -81 53 -59 97 -99 -35 38 -67 14 27 44 -51 -59 80 -44 37 0 -5 25 -22 -90 -42 100 37 -34 23 -75 43 -1 -75 -8 38 49 67 30 -28 -49 -36 -100 -11 -78 29 -67 -42 -67 45 6 50 73 -5 62 -21 91 -82 -81 87 18 18 98 -17 82 -24 80 10 98 -38 95 -72 -77 -91 6 78 50 -21 39 81 -21 23 79 -65
66 -55 44 -31 37 14 39 36 -17 42 18 57 95 39 82 -16 -87 34 -75 -53 -52 -77 88 -3 58 -55 22 -5 -36 -9 -99 -64 -76 24 -63 100 -67 17 -87 -62 -83 -79 100 -6 86 -57 -63 7 -55 17 -11 59 -64 49 70 -20 -100 -94 42 51 -69 -58 15 10 -55 -39 -61 -48 5 -14 82 43 -31 24 -67 94 75 46 23 65 42 88 24 32 50 -97 54 -78 40 -34 24 -13 -75 64 14 5 -23 -74 -49
-42 -30 66 -17 -76 -62 -3 33 72 90 48 -7 -100 -77 -17 -98 21 -57 -60 33 36 1 10 18 39 48 24 -55 35 95 -99 75 56 70 9 -88 99 -55 -53 -85 49 23 -23 100 60 69 34 -68 -42 2 -68 20 55 -56 -27 -100 78 -6 -18 -14 16 42 -18 -33 61 -16 33 21 88 63 -51 89 9 -28 -8 -39 -3 26 10 -10 -85 52 -16 32 47 90 -40 9 48 26 100 -71 -96 12 7 -32 7 17 -41
-12 55 -24 -22 46 94 70 -29 82 58 -27 -88 -4 -41 34 -96 -73 24 -31 -44 -78 91 0 80 -59 -28 -73 -43 -28 -94 -22 88 13 30 -95 -23 -57 -59 10 67 -55 -68 -32 -86 100 33 68 29 76 -100 72 -36 52 -33 -100 -95 -11 -64 97 -94 91 100 55 91 -54 68 18 -17 31 -36 78 -24 98 22 -71 -50 -38 44 -57 -65 -9 81 -8 56 54 49 32 49 -5 -93 -75 75 86 -56 -12 4 42 -12 39
-82 11 -63 16 -88 24 77 -83 42 -76 62 63 -60 28 -75 -100 40 11 -1 78 -64 99 -22 74 -47 -2 -19 88 21 42 80 35 82 -63 -24 -97 -100 44 99 -89 -86 -71 19 -30 -100 100 85 -40 -73 -12 -25 41 68 -100 67 67 45 -6 -18 -15 -80 87 47 -17 -59 82 8 -86 65 -8 77 20 30 -53 -29 17 -45 87 -28 62 -30 -34 -65 -72 17 77 79 8 2 -47 -61 57 35 -15 57 -71 -51 -75 -68
-95 -1 10 -25 2 -73 -23 60 -81 -71 90 73 -23 -45 94 13 -12 -94 -22 -82 -88 -100 88 -99 -90 -70 77 -23 19 -43 -20 -90 63 1 48 -66 82 -65 59 58 15 -14 35 -7 79 -37 100 -15 20 7 -78 88 -100 50 6 -25 -23 15 -78 48 -55 74 79 -50 89 -97 25 -70 -2 -30 -78 -35 -7 -81 100 21 -95 11 -30 -23 52 81 -65 -60 -42 -21 -39 44 -8 -24 49 18 -21 -56 24 -46 81 -8 46
4 67 -89 81 -42 -64 55 -43 -84 -2 41 42 -85 61 10 12 -60 -9 28 -66 -10 6 -38 100 -3 -94 97 6 22 -7 -35 100 42 73 -38 -97 -100 38 12 10 -87 8 23 -92 -87 -54 -18 100 -19 -40 -45 -100 -28 -17 -52 42 -9 -7 51 79 -33 -75 -85 -86 -14 -13 -7 -58 -9 -78 26 -7 -50 22 66 -7 -30 -51 28 -4 68 -17 -59 -70 56 31 -61 40 22 -57 48 -80 -11 76 52 35 -35 45 30
-69 71 -16 99 -2 -62 85 26 -19 -29 10 -72 -92 87 88 62 -70 39 63 9 -59 5 -89 47 -73 26 -32 98 -64 -67 -24 -74 -98 11 -56 -44 -22 -15 40 -98 -25 75 70 -73 86 -67 -57 6 100 -75 -100 80 -6 5 22 15 36 59 -23 84 -25 -34 -93 -1 -85 66 36 73 41 -31 50 -96 24 0 87 -2 17 71 -11 -98 85 48 86 65 69 97 66 0 -7 54 1 99 -62 17 -63 -24 8 12 -36
-20 -58 39 98 98 -33 94 25 -28 -37 5 92 74 43 -74 30 11 52 38 -59 -64 -37 -18 -44 40 -71 93 -63 92 41 98 -59 -3 61 77 100 -94 -30 62 52 22 71 -14 81 39 -13 8 -18 20 100 2 29 -86 7 29 -9 23 -22 19 69 87 84 4 -35 77 -46 -66 5 3 19 -89 -17 78 -98 -34 -53 -22 -31 -46 68 -12 -64 -3 80 -48 41 -83 72 88 -93 -24 -83 -35 -83 54 33 83 98 -55
51 -40 16 -4 -11 97 -24 -54 -46 -75 100 28 -42 -74 -35 -62 86 19 3 -13 -68 -79 -90 -99 -60 40 26 65 -36 74 55 -35 7 72 26 71 81 -56 11 -29 -99 57 10 15 -70 3 28 13 -100 -30 100 -3 -8 52 -60 -56 45 -67 -26 68 -56 41 -32 2 -50 39 25 40 -68 62 42 54 56 -90 -29 34 -49 92 68 -100 33 -66 -15 -26 67 -29 -26 -79 -22 -8 67 51 31 10 89 61 46 -95 -28
76 -25 89 -80 -58 71 30 -73 17 -47 17 -29 -53 -29 -5 51 -15 -88 96 36 72 24 57 66 100 -38 28 3 -98 -97 86 61 -49 94 -54 -98 -8 -50 7 97 46 65 80 44 58 -81 41 -100 -56 75 -64 100 -76 -1 34 -25 80 -13 67 -6 -49 -34 -21 -13 -60 -22 -13 -26 87 82 -65 11 27 17 -80 98 -37 2 23 -53 -81 -17 -28 -71 -86 -94 26 -71 53 80 64 -94 -5 -33 -14 66 -3 -56 -7
50 66 27 -84 -68 36 28 2 -54 19 -53 -63 -45 61 -1 12 -16 89 -62 9 -23 87 95 -16 82 -89 24 -80 95 49 -19 73 -88 -29 65 17 13 -35 4 -96 84 -87 15 75 -36 22 -100 26 -97 -37 -65 -39 100 56 -67 -91 32 -75 -37 41 78 -95 -77 -89 71 -47 77 -51 90 -27 -70 -12 85 -14 79 1 -27 -72 -66 94 -69 36 -10 -47 58 -8 63 -48 58 -8 2 67 -79 38 48 79 5 -22 -10
-52 68 41 -36 97 -70 67 -23 -99 19 88 -44 -100 68 -26 -70 -26 -52 -22 22 -93 -47 -5 -67 -27 -44 -4 -49 -37 73 -87 93 -23 79 5 -90 -24 -94 -68 -17 0 60 26 -27 7 -100 -15 -88 77 38 70 55 81 100 -17 -79 21 46 -91 -73 55 -75 10 -21 -45 -32 -64 18 -11 59 47 83 10 -41 28 -40 -13 66 -7 52 -9 12 -7 -62 43 -93 -51 27 11 -16 8 68 -90 93 81 33 -94 -86 -21
-22 -49 43 22 23 33 -15 -55 -81 -72 -25 0 -30 84 39 62 -72 -28 -20 -66 55 73 -62 64 55 -36 -96 -41 -78 -67 70 28 -81 -9 19 -36 59 -62 50 -14 18 57 -33 -51 -100 -73 19 9 60 38 57 79 100 -40 100 -15 -24 2 76 -13 -82 81 -2 44 53 -56 47 -21 -20 48 24 87 92 67 55 -21 24 15 4 75 48 -73 7 -17 33 -70 40 -13 51 -24 -43 -56 62 51 1 -45 21 -56 -18
-87 -8 61 -4 15 -34 89 8 -29 74 70 42 -53 81 -82 37 -49 29 42 -42 -93 38 87 0 -87 52 -94 -21 -6 -31 -48 -77 1 -46 61 -95 -53 64 -55 -17 42 -65 -26 -100 -62 -68 -1 14 37 65 12 -61 6 -77 29 100 -52 -67 -59 -97 82 -68 53 -72 -68 -75 -100 83 79 -5 -50 -18 -90 53 47 75 76 52 10 57 34 -2 17 -14 54 62 -72 18 66 63 85 49 -50 6 -31 -40 48 59 -42
-6 -85 53 -53 -93 21 38 32 58 -89 75 12 -95 -40 22 -62 -94 47 3 -39 -80 -19 15 12 -97 -34 -31 50 -95 -97 -10 -17 -61 85 -51 34 -81 -67 -95 -35 26 -30 -100 -37 30 37 43 89 66 -13 -23 23 59 15 -20 -52 100 69 60 -23 29 -16 25 17 -70 -14 90 9 37 70 24 11 14 -94 -20 -55 -85 41 69 -65 -77 93 21 45 -45 -73 58 -39 -88 -45 -28 12 -64 -16 73 -5 65 47 -43
44 -57 23 -91 28 -52 -49 14 -6 -60 -65 -42 83 52 0 -55 49 -81 45 86 -73 -90 -20 -88 -4 -32 99 -27 -5 6 -15 25 -41 44 -94 61 -25 -67 7 -90 -28 -100 -2 -49 -98 54 95 -14 -62 88 27 76 13 42 -20 53 53 100 92 -3 77 65 -91 -2 96 11 -68 -9 47 -52 64 -54 -24 -61 -72 -45 -15 1 -3 -68 -9 31 78 -68 89 45 -5 -73 3 11 -14 40 67 55 -22 -45 35 -17 99
41 45 -77 -78 98 0 52 -76 -35 51 -90 -84 -100 31 -60 29 -7 74 -88 70 70 -86 80 -37 62 -93 -93 28 -96 54 -9 1 70 -28 -49 -67 77 58 -54 35 -100 78 57 3 -57 -96 81 39 -53 72 72 -1 -10 86 -49 43 20 59 100 -24 79 -25 61 -35 29 -30 47 45 -67 97 45 -85 28 90 66 -97 79 -64 3 37 32 40 -74 -48 0 14 -74 2 -19 -31 44 4 75 36 36 -98 91 74 -78
98 94 -52 67 -78 -39 -70 -3 57 23 30 47 78 19 -5 -13 -26 84 53 86 -28 48 38 24 -50 47 -11 2 -35 86 30 3 -65 83 62 -93 -67 54 77 -100 63 -33 -75 -63 62 61 50 -85 72 -7 -49 61 90 32 85 -65 42 -18 -63 100 -20 100 -78 13 66 -76 -59 -56 -50 -22 -30 45 43 32 47 43 -7 -98 -18 -10 -43 51 91 -24 2 88 -10 -78 35 -96 -18 13 72 -16 -12 56 15 -79 20
-71 -54 -93 50 32 -80 67 -29 48 -93 94 74 -98 -67 92 12 -54 70 -28 -24 33 -50 7 56 81 -16 99 71 44 60 -36 -91 82 28 19 45 25 -88 -100 -68 -26 99 81 29 22 -88 -91 -70 -34 -61 79 45 68 92 -42 -63 85 -46 20 55 100 94 54 -75 73 -34 99 -93 73 49 -4 -89 47 -56 53 -80 29 81 17 57 89 -16 -7 -70 -16 -49 -46 -48 -19 9 93 36 50 -66 45 -5 93 82 17
-22 -44 14 -50 -15 100 65 85 16 -79 -8 -95 34 -3 77 -58 -33 -61 -83 91 6 -73 17 85 43 70 81 -25 -51 51 -6 49 -84 96 21 23 88 -100 -29 24 -23 56 -82 94 50 -20 -4 -87 32 59 -32 41 -97 57 40 65 40 18 15 32 -1 100 -20 -50 -84 -22 43 6 -63 55 -50 5 24 62 48 -13 -24 67 -17 16 -71 41 91 -99 24 -30 -26 -7 11 52 81 -60 -9 -74 -58 12 0 55 41
-100 53 1 17 -70 33 62 -86 60 100 -59 85 -47 -10 -37 96 -95 -15 -78 97 25 -1 64 -25 12 -95 50 17 91 -94 92 31 39 -22 -24 1 -100 -50 -69 -29 82 -51 -21 80 -27 -95 31 79 -45 -15 41 19 41 5 -87 -43 -87 -40 15 -63 -42 -48 100 -71 -96 -59 50 -21 -62 -26 83 10 18 42 -15 43 -78 52 -1 -34 -30 14 9 8 17 -31 95 -62 75 90 28 -51 -77 81 65 -9 86 -83 82
-69 63 -99 85 36 78 -11 -49 -54 -83 50 55 67 -80 12 -78 88 -7 -49 94 81 -59 46 7 47 -80 -27 -36 6 -43 -50 -5 81 -46 -6 -100 29 46 -7 24 6 -13 7 34 1 72 -85 -86 97 12 35 11 -44 54 96 -63 -26 -21 33 88 -17 41 -50 100 -45 -92 77 36 -72 -77 -32 -70 50 -45 83 100 45 5 15 -34 -53 -52 46 80 -18 -35 -9 78 21 -52 -2 -79 21 73 -62 -2 -58 66 37
-60 -27 -9 99 12 96 -93 40 -87 87 -72 89 1 34 -2 -20 52 36 32 61 59 -65 -83 37 -69 91 15 -50 75 -24 51 -13 -21 60 -100 -62 -54 -78 61 -43 -35 -90 -90 96 16 -57 71 -85 10 -23 2 -3 -64 3 -43 -74 80 -40 53 88 91 -32 -22 0 100 44 -83 -58 -45 14 -44 -77 -24 36 42 -72 31 42 -36 27 34 -12 -31 -77 -91 24 63 37 -51 47 -61 11 86 35 -57 48 71 69 34
-83 -16 49 44 39 44 -41 7 2 -72 20 93 -78 80 51 81 1 -18 -59 40 61 78 40 83 40 60 -43 -26 -3 89 -35 -75 44 -100 26 3 49 93 -2 -83 23 -71 29 -69 89 -66 15 47 -69 20 -22 69 -23 63 -26 -89 -32 64 -23 -89 36 -43 -77 -12 -11 100 -72 -31 33 80 -26 43 66 52 90 15 9 30 -70 -14 55 53 71 78 -50 -83 -39 53 -15 45 -87 77 -36 9 60 -23 -99 45 -60
21 60 -7 24 -21 -70 -73 44 -9 -85 8 -97 -54 -64 95 8 -54 -14 98 2 20 4 17 3 -56 -28 -25 29 -6 11 93 -28 -100 -61 28 100 15 44 70 26 -33 -86 -76 -26 17 69 18 56 19 17 -12 -6 -79 42 -50 -79 -62 -44 -24 93 83 -53 -28 37 95 46 100 -48 67 -82 -5 60 61 39 72 -31 -47 42 -53 -42 66 29 -17 72 32 -21 38 -58 -73 20 -3 64 -56 -57 19 69 42 21 -66
37 -20 1 -15 32 93 -96 67 93 4 72 -31 55 47 -85 92 -63 -94 23 76 74 -9 -18 93 -84 -95 97 -45 -94 66 -53 -100 -84 -49 -51 60 -1 95 -48 -53 -83 3 -2 43 -54 -45 -92 63 -76 -70 -50 61 52 -47 -21 -60 0 -84 2 -64 -68 29 -74 13 45 -2 82 100 -29 90 -23 85 62 97 55 92 34 81 74 0 -44 42 47 63 -7 -16 -67 -30 26 30 59 -24 60 -2 81 -17 -32 23 19
-9 27 95 70 -28 76 -17 6 -8 -28 -32 -42 27 -19 44 14 89 44 -61 -7 40 -19 17 -99 -100 -38 49 -45 -24 56 -100 -80 51 99 -83 -51 -81 -50 -17 28 -67 28 55 -25 23 97 -80 -5 -15 96 -4 39 -87 42 77 21 -28 -26 88 -28 99 57 -41 -9 71 -9 85 47 100 -77 23 3 -57 -44 -63 -52 5 55 -50 79 -56 -23 35 17 -75 83 49 -100 -23 -27 6 2 8 -82 46 -6 44 40 -60
97 28 67 -76 -62 -79 26 25 60 56 -30 82 -22 -37 52 15 17 -47 -54 18 58 7 -79 24 88 21 -98 66 -41 -100 24 50 -15 -14 31 -73 89 95 72 -83 15 10 89 -53 89 -91 -72 -77 17 52 -74 59 82 -34 -71 -96 -23 -34 88 -25 92 -65 53 6 82 93 -10 -11 59 100 -47 10 61 -93 55 -24 59 70 21 -66 -29 7 3 91 -75 86 48 39 46 26 33 -62 -45 -94 74 -59 -70 -92 -72
-75 7 16 -86 -58 49 -42 100 -97 -36 18 -17 -44 -36 -20 -20 95 61 97 -46 45 51 98 -8 64 -64 24 69 -100 12 91 -11 -35 -25 68 79 -42 34 89 -87 53 52 21 -22 91 -76 65 -58 -51 17 -8 35 46 73 -40 42 81 26 16 86 -25 13 92 -20 -12 86 38 -91 -40 81 100 94 34 -63 50 77 -13 66 89 75 34 9 56 -3 -63 88 -90 66 -74 0 -4 24 9 96 -80 -50 93 -32 42
53 99 1 -40 -13 -18 90 -18 -15 -93 95 47 26 -38 68 26 -75 93 -95 -90 -54 -4 94 -25 -49 65 75 -100 36 -96 52 12 -72 -41 -35 -6 -43 29 88 -99 -45 50 85 -84 -39 54 -58 57 26 -69 58 63 -71 47 73 -38 48 -3 26 -62 -5 -94 -39 73 -16 -87 -23 26 -29 34 77 100 65 81 36 52 78 6 -18 33 -65 -25 -64 -97 -64 -1 0 16 68 98 74 -73 28 34 -38 -73 -91 31 90
86 -45 56 93 96 89 4 16 -1 95 73 -43 -2 28 91 53 18 -87 -28 20 50 14 -68 -10 -52 50 -100 -100 -21 23 36 -44 -17 33 -17 -49 -6 14 -38 -1 -28 -32 -53 -48 32 16 -79 -63 -98 -97 50 -50 -48 16 76 84 -83 93 79 -56 -62 89 60 -71 -22 73 59 48 14 -27 97 45 100 86 -76 47 -1 -98 94 -91 22 14 -59 14 57 0 28 96 50 -28 99 -14 -39 86 -87 80 67 -99 98
-2 97 34 30 18 -12 41 -83 -10 24 -55 78 88 -83 -55 80 -90 -18 -65 -20 -30 -52 89 -90 -73 -100 77 -33 92 5 -75 3 -63 88 40 30 -19 2 -52 100 -84 -6 -51 -24 76 -53 56 -64 26 -75 -79 -83 -65 -72 39 -57 -60 -22 32 -68 87 74 12 40 -14 -62 -70 -92 -31 56 45 90 47 100 57 51 98 31 -15 -35 -25 42 -85 -100 91 10 -53 -79 3 47 -90 29 24 -55 -66 60 16 -28 21
-54 72 31 -93 22 -39 -10 38 76 -86 72 28 88 72 89 -12 -53 14 19 -81 -86 -94 28 39 -100 -71 -34 -47 70 -14 1 -79 36 41 80 99 27 68 54 -31 40 85 -5 -19 0 100 9 -34 -26 -79 -21 88 -73 2 64 -16 8 -6 93 35 30 -45 -82 -98 -9 -77 -46 38 84 91 -16 -35 14 -48 100 84 52 56 -80 74 43 25 30 83 -61 -57 32 -19 68 53 19 70 -100 19 -63 5 45 50 -85
-99 44 24 52 -56 16 -83 45 -55 71 40 -92 -22 88 -11 -13 -40 98 15 -80 -58 56 19 -100 51 -15 77 89 21 -38 80 -72 6 25 -42 77 80 -93 100 -12 97 89 13 82 18 -95 -30 -86 -54 0 -44 89 94 -42 -52 -6 -95 -46 -30 -16 -82 5 -46 35 -70 53 -77 17 19 64 -76 -80 -14 -35 79 100 -16 64 39 7 -85 13 40 -83 93 -15 72 -48 -11 60 5 -33 24 -97 -72 -8 99 95 -38
47 -55 -35 88 37 73 25 7 -89 -9 -69 -33 49 80 38 -76 0 35 -33 -79 -8 90 -100 -74 72 -65 -100 -46 42 100 51 -3 -55 83 75 -65 93 54 75 -45 -24 67 -94 -89 -96 44 -51 -65 83 9 -55 5 49 -70 95 3 67 -72 -97 9 78 91 24 54 -43 -25 76 -2 -18 97 -48 -77 -16 1 -93 73 100 -36 17 48 16 63 12 35 96 -83 -77 54 -11 63 83 -82 73 -49 -96 -28 -19 -4 -43
48 56 -5 -39 61 -93 -72 -45 -54 -58 64 35 90 -57 -26 12 57 85 72 -52 91 -100 62 23 -49 39 90 -96 80 -26 52 -47 68 -77 82 -87 -70 -79 -42 32 -20 -24 -45 -44 44 -59 45 -25 -44 -54 -87 84 -38 1 1 -99 74 -12 -47 -72 -15 -7 -50 62 30 -90 2 -55 41 73 -8 100 -96 -90 -2 59 91 100 -30 -79 75 -27 -14 -79 -65 -67 -59 41 74 -89 98 70 -25 84 -28 -77 -16 91 17
33 27 -17 34 81 76 15 63 36 -51 -23 -92 34 8 -74 21 -16 -93 -98 -7 -100 29 -31 -55 -9 27 67 6 -37 14 -42 -71 -99 -80 35 -37 29 88 57 86 -32 26 100 -6 -98 -50 37 95 -71 31 -35 -52 -29 -91 -3 32 -45 -65 -9 -72 92 -22 -65 36 67 -63 63 63 -73 -12 -43 84 78 98 -20 -82 3 81 100 -54 16 -1 -17 69 -58 -76 31 -13 67 -54 34 -25 -68 75 74 7 -86 -54 53
84 41 -14 71 70 77 -15 25 -1 7 -4 -45 73 14 -63 -74 100 0 1 -100 70 82 25 62 55 -91 49 -49 14 99 61 -5 63 -43 -6 31 29 51 -39 69 78 80 -68 0 18 26 -49 100 17 -45 100 38 -87 -15 63 -64 96 -62 -99 -97 16 79 28 -60 -88 48 56 -57 -14 95 31 88 -41 19 6 19 21 94 -28 100 -4 69 -55 -96 10 -53 61 52 64 -96 59 33 -69 79 -22 45 3 32 -7
97 -53 70 -63 30 80 -50 -73 95 -65 4 63 -55 -4 45 -34 73 41 -100 38 1 51 69 91 78 66 95 -73 -63 91 46 83 -52 -71 18 -70 -59 9 -87 40 64 -19 -54 78 93 14 49 38 -100 87 -29 72 17 57 70 -54 22 -89 14 96 42 66 -64 64 -63 6 17 12 64 8 99 7 28 18 -68 -59 24 46 -10 13 100 29 33 87 -18 35 -30 75 -57 2 -5 -49 71 -17 -29 38 -62 5 -71
-49 -25 81 80 89 75 89 53 -72 -17 -56 -92 -79 -60 41 -9 -34 -100 -48 -57 -85 -58 -50 -70 -40 6 36 58 -40 97 40 -3 -48 17 79 -40 -37 97 -11 -24 2 -64 56 14 7 77 -68 82 -93 21 -46 -39 43 25 -5 -15 8 -79 54 28 -90 79 90 -56 -27 -30 -15 3 49 79 60 76 98 -32 -85 91 -79 75 -23 -29 -71 100 43 -81 24 -27 -44 74 -59 88 -26 92 9 14 15 -38 -98 36 -2
18 -85 -35 -52 -90 10 35 -26 -30 -60 75 -56 66 45 -79 74 -100 -80 -67 67 60 -4 96 63 93 3 59 51 40 16 58 -89 3 -10 -29 72 4 -6 48 -54 74 95 93 98 -90 -66 -47 -97 25 56 19 13 -44 7 -68 -97 97 -72 42 12 -97 60 7 -43 93 70 21 -32 -33 -38 64 26 -63 -25 15 64 -63 76 -20 17 -8 67 100 -7 -22 -43 65 -79 92 86 -21 -80 98 -97 64 -81 44 32 14
73 75 -41 95 53 50 -86 0 -98 4 60 -81 80 -22 -30 -100 100 -54 75 2 24 -85 55 72 -20 -87 75 14 57 81 -97 -9 55 33 17 -4 -4 -92 -37 -95 71 77 -88 -62 -73 56 95 17 81 28 -92 -42 0 -54 -44 -46 47 -2 -9 28 -44 -55 -73 7 -99 -99 -54 97 -68 -22 -23 42 49 87 81 45 -84 -2 91 -43 16 -34 -41 100 24 -81 6 -58 -25 -47 6 -61 -47 -17 -13 -78 -66 39 43
12 34 -22 -19 87 23 -3 -13 -35 -90 35 72 27 -74 -100 -10 71 -19 4 -87 5 -45 84 6 -54 4 87 12 -65 58 51 70 44 63 -68 -11 82 -92 85 -70 68 -55 -4 19 -19 86 49 43 -99 98 -3 -53 -56 37 -99 -14 -61 -58 59 -9 3 -43 -19 -31 -24 -74 57 -50 -68 76 41 27 54 49 88 50 -87 40 44 -88 -46 29 -93 -68 100 27 -44 -29 -89 -80 76 34 -81 -94 -83 -55 100 -7 -81
87 -77 -67 94 -9 90 -37 1 12 47 49 90 -7 -100 -22 -67 -41 -61 2 -78 41 -53 51 -81 46 59 54 76 51 70 -37 -86 67 37 77 -46 12 -70 78 24 99 22 34 -80 55 54 -15 48 -23 -53 -68 -73 14 89 27 -43 -63 -53 -57 81 -93 88 94 15 61 35 36 40 33 81 6 13 -24 46 24 55 -31 -46 -51 61 -13 -75 -41 -82 95 100 95 26 -64 -89 69 90 -2 69 78 -67 -85 15 -26
98 54 -92 93 -95 -41 59 61 57 -62 74 36 -100 30 -90 96 -67 -39 -68 -60 -58 33 13 54 -7 -39 -86 66 -34 99 -68 1 76 20 87 82 28 15 21 49 -100 -93 46 -4 88 -50 -54 88 -36 41 88 -60 -17 78 24 -57 -12 78 38 71 -89 43 -51 79 39 55 44 88 -21 40 20 -72 -68 -25 17 74 11 77 17 5 5 -1 -65 -88 87 -15 100 97 26 -14 -42 93 97 -63 -42 62 -48 94 -90
-90 42 -2 -74 -24 24 -8 -72 -28 -73 75 -100 71 55 29 -69 72 85 -56 -26 -18 8 32 11 79 -38 -22 -91 31 24 -55 4 -7 43 -96 -36 89 -38 40 14 -93 -50 2 -20 63 35 7 -63 2 -49 52 -63 91 -96 -91 55 89 99 56 71 84 78 96 -89 27 88 67 24 29 1 56 -99 -18 -2 55 -75 99 -26 -61 -69 -10 89 -47 4 15 4 72 100 -88 20 -37 -83 21 -53 -99 -17 52 4 -34
-95 97 -67 -64 -24 68 -17 -66 -47 96 -100 -79 -21 -79 -45 17 -69 -42 48 -41 -2 31 9 42 97 -73 59 3 -91 86 -24 89 43 21 47 50 -37 25 -97 86 -67 32 61 -53 86 -92 61 42 -53 73 90 -24 -53 -97 39 54 -74 -55 94 -63 85 3 -30 -39 -70 32 -36 40 -62 6 93 -43 -35 79 -17 44 93 19 -76 100 -99 27 -64 54 41 -6 -1 92 100 68 -59 93 80 -99 -12 -64 -61 -57 38
15 -25 19 -29 71 50 18 7 -9 -100 -83 -21 98 99 -81 33 50 35 -29 -54 13 82 84 -34 -54 75 56 -50 -32 34 8 -85 -93 16 -50 -25 3 -77 -59 -58 -20 89 38 -68 50 -8 -52 95 -51 89 -14 76 91 93 90 35 -52 -5 -23 24 -13 -66 51 43 53 62 64 -19 -75 -88 -46 46 -63 -52 -12 -78 53 -27 -4 -30 -100 87 -51 -82 -71 -16 -14 50 72 100 -79 46 92 -68 -64 64 -40 13 82
-40 91 72 69 100 -23 -66 60 -100 24 75 -98 -62 57 75 -18 27 93 31 43 -60 -99 -65 -30 -4 90 32 44 82 96 -76 29 -30 -55 48 -20 -52 -16 8 -62 -75 35 -90 -47 -59 -3 30 -55 46 35 32 -30 100 -61 83 -9 -73 31 69 12 -67 16 -5 82 -36 24 34 75 -87 17 -42 24 35 -6 87 66 74 -81 -57 -32 30 29 51 -17 49 -54 -83 -13 -9 -81 100 85 -14 -64 -47 0 38 -1 -85
-79 0 13 -9 -56 66 -79 -100 56 -19 -48 -3 63 73 25 -12 -20 27 -55 -6 1 68 -29 -44 2 -72 -77 -20 22 -83 -8 -66 -34 33 70 -53 8 47 -38 -76 -84 14 -92 -44 74 97 -52 -36 -53 40 54 93 -3 88 59 -35 -55 4 68 -36 -35 -15 18 71 17 -89 -93 -79 -1 15 -26 69 -14 91 100 -41 12 90 98 -4 -69 -13 -73 58 -49 14 -83 85 28 -1 -62 100 -17 -64 -6 31 41 79 -87
-19 -62 -80 49 -84 62 -100 89 -62 -37 27 -61 -99 91 -1 18 22 41 -13 -8 -26 -55 -85 10 46 65 80 26 93 54 30 9 42 13 59 -98 -78 -93 43 -83 35 45 92 49 87 52 -55 -89 -93 6 34 100 33 -25 -49 -9 36 72 9 -25 -29 -43 -65 6 11 -54 -20 45 -53 -60 57 -79 74 99 -98 11 -66 -53 46 -42 -67 15 97 -38 70 -39 -91 -83 60 -33 55 25 100 2 51 -1 40 48 60
-28 -9 10 -71 45 -100 12 43 -66 -18 -29 -64 -79 87 9 64 2 57 -65 67 37 -33 -63 -10 -40 60 86 0 36 -39 12 -51 65 -59 -61 61 28 77 100 43 -74 94 -80 59 85 -48 21 33 -28 -47 -8 -80 83 79 98 46 62 79 88 23 -97 85 -2 96 20 -89 19 -55 -96 20 -30 64 50 51 -23 26 8 -92 83 -83 -72 98 72 -2 -29 -8 -48 -20 23 29 -35 29 93 100 46 33 3 2 95
40 79 -15 38 -100 -57 0 -28 -1 -64 -21 -89 -43 -95 -93 -70 32 60 16 -2 33 55 58 100 -45 52 -1 -87 26 -52 -82 73 52 12 56 -30 75 88 88 -19 90 10 -29 39 95 42 -54 -72 -45 -33 59 53 -32 87 -95 -28 -59 -80 92 100 62 89 -67 -29 -36 -81 -64 40 66 -62 -57 -64 43 -33 -76 24 83 57 32 -23 52 84 23 23 76 -88 -1 89 30 9 -84 -98 -76 98 100 -44 85 75 -57
-50 41 -12 -100 70 65 -80 53 -36 -5 78 15 45 -87 19 74 89 -15 -73 89 85 93 65 -57 95 71 -52 23 -61 38 -44 -67 -73 -69 -12 -19 95 76 50 -64 59 -78 61 73 82 -15 -61 -43 58 -96 49 36 68 -62 83 -79 74 0 -96 67 42 -84 -90 -75 15 89 -86 40 -31 -40 -97 91 95 -94 92 -52 -48 13 -8 -27 -49 64 86 -13 -52 -57 -28 61 -60 -90 -92 -63 10 74 -11 100 53 77 -67
8 67 -100 -95 74 86 29 20 68 56 9 -29 55 7 -63 19 -62 51 74 58 -36 24 -55 -41 -98 -87 6 -88 36 30 -43 -72 -29 -48 -61 -84 83 83 -93 40 -1 19 -62 -45 -19 -61 -12 -22 -73 93 -96 -1 -92 -52 20 -5 62 -82 -31 15 69 -44 97 84 89 -69 -63 -33 23 16 -83 40 8 3 16 88 84 53 32 -96 83 -61 -93 -42 -19 82 -23 100 7 -96 67 14 -72 -86 -77 79 100 14 4
6 -100 61 72 -47 47 -40 -87 61 89 -30 99 80 -31 27 7 -27 16 -97 -85 8 -65 47 86 -28 -35 4 -16 80 19 75 43 -34 -47 -35 -17 -96 -20 -92 -25 -38 -89 67 -50 53 -16 -32 61 20 -38 14 -19 -58 52 22 59 -77 21 -24 -85 15 43 -58 56 -14 -36 63 32 -86 40 53 -89 81 -43 88 -69 -8 82 37 50 -31 -99 -30 34 -52 85 -2 -70 92 10 80 -72 -14 92 40 10 94 100 98
-100 81 73 34 31 51 -55 29 -63 37 -77 64 -22 84 94 -70 78 -26 91 55 91 -58 47 82 -18 -62 -85 19 24 -26 57 -72 -37 -15 -64 -81 -70 38 -41 -65 95 60 59 -6 -4 -72 89 14 92 88 67 13 21 -65 97 -82 19 27 35 85 -97 81 46 69 -81 -7 82 73 -95 -81 4 96 89 45 54 -66 -75 -17 15 -57 58 -18 57 -60 62 -6 29 94 -79 -58 51 -36 1 85 59 -85 -63 -84 100
*/