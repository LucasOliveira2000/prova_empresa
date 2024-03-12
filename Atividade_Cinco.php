<?php

function inverterString($str) {
    $tamanho = strlen($str);
    $stringInvertida = '';
    
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $stringInvertida .= $str[$i];
    }
    
    return $stringInvertida;
}

$stringOriginal = "Olá, mundo!";

$stringInvertida = inverterString($stringOriginal);
echo "String original: $stringOriginal".PHP_EOL;
echo "String invertida: $stringInvertida";