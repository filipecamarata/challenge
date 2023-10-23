<?php

function calcularPontos (){
    $pontosFuturos = array(
        'Real Madrid' => 30,
        'Barcelona' => 25,
        'Atletico de Madrid' => 24,
        'Valencia' => 18,
        'Girona' => 15,

    );

foreach($pontosFuturos as $clube => $pontos){
    $pontosFuturos[$clube] = $pontos;
}

arsort($pontosFuturos);

return $pontosFuturos;

}

$pontosFuturos = calcularPontos();

foreach($pontosFuturos as $clube => $pontos){
   if($pontos%2==0){
       echo $clube . ": " . $pontos + 3 . " pts<br>";
}else{
    echo $clube . ": " . $pontos . " pts<br>";
}
 }

 

 