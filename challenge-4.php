<?php
$L = 3;
$a = 5;
$b = 22;
$c = 2;

function ordenarCrescente($a, $b, $c){
    $valores = [$a, $b, $c];
    sort($valores);
    return $valores;
}

function ordenarDecrescente($a, $b, $c){
    $valores = [$a, $b, $c];
    rsort($valores);
    return $valores;
}


function maiorMeio($a, $b, $c){
    $maior = max($a, $b, $c);
    $menor = min($a, $b, $c);
    $medio = ($a + $b + $c) - ($maior + $menor);
    return [$menor, $maior, $medio];
}


if($L == 1){
    [$a, $b, $c] = ordenarCrescente($a, $b, $c);
    echo "Valores em ordem crescente: $a, $b, $c";
}elseif($L == 2){
    [$a, $b, $c] = ordenarDecrescente($a, $b, $c);
    echo "Valores em ordem decrescente: $a, $b, $c";
}elseif($L == 3){
    [$a, $b, $c] = maiorMeio($a, $b, $c);
    echo "O maior valor esta no meio: $a, $b, $c";
}else{
    echo "Valor iválido para L";
}