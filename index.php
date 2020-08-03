<?php

// Sa se afiseze toate numerele din intervalul [1000,99999]
// care au proprietatea ca atat ele cat si rasturnatul lor sunt prime.


function varificaNumarPrim($n)
{
    if ($n == 0 || $n == 1){
        return 0;
    }
    for ($i = 2; $i <= sqrt($n); $i++)
    if ($n % $i == 0) return 0;
    return 1;
}

function rastoarna($n)
{
    $d = 0;
    while ($n != 0) {
        $c = $n % 10;
        $d = $d * 10 + $c;
        $n = $n / 10;
    }
    return $d;
}

function result()
{
    for ($i = 1001; $i <= 99999; $i++) {
        if (varificaNumarPrim($i) && varificaNumarPrim(rastoarna($i))) {
            echo $i;
        }
    }
}

result();