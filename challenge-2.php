<?php


function calcularPontos (){
    
    
    $pontosFuturos = array(
        'Real Madrid' => 20,
        'Barcelona' => 17,
        'Atletico de Madrid' => 18,
        'Valencia' => 13,
        'Girona' => 12,
           );

if($pontosFuturos['Real Madrid'] % 2 == 0){
    $pontosFuturos['Real Madrid'] +=3;
}

if($pontosFuturos['Barcelona'] % 2 == 0){
    $pontosFuturos['Barcelona'] +=3;
}

if($pontosFuturos['Atletico de Madrid'] % 2 == 0){
    $pontosFuturos['Atletico de Madrid'] +=3;
}

if($pontosFuturos['Valencia'] % 2 == 0){
    $pontosFuturos['Valencia'] +=3;
}

if($pontosFuturos['Girona'] % 2 == 0){
    $pontosFuturos['Girona'] +=3;
}

foreach($pontosFuturos as $clube => $pontos){
    $pontosFuturos[$clube] = $pontos;
}

arsort($pontosFuturos);
return $pontosFuturos;

}

$pontosFuturos = calcularPontos();



foreach($pontosFuturos as $clube => $pontos){
  
       echo $clube . ": " . $pontos . " pts<br>";

 }
