<?php


function isFibonacci($num) 
{
    $a = 0;
    $b = 1;

    if ($num == $a || $num == $b) {
        return true;
    }


    while ($b < $num) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }


    if ($b == $num) {
        return true;
    } else {
        return false;
    }
}

$numero = 21;  

if (isFibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.";
} else {
    echo "O número $numero não pertence à sequência de Fibonacci.";
}

