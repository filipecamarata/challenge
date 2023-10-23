<?php


function calcularPontos (){
    
    
    $pontosFuturos = array(
        'Real Madrid' => 20,
        'Barcelona' => 22,
        'Atletico de Madrid' => 16,
        'Valencia' => 12,
        'Girona' => 17,
           );

           $pontosFuturos['Real Madrid'] +=3;           
           $pontosFuturos['Barcelona'] +=3;           
           $pontosFuturos['Atletico de Madrid'] +=3;           
           $pontosFuturos['Valencia'] +=3;           
           $pontosFuturos['Girona'] +=3;
          

foreach($pontosFuturos as $clube => $pontos){
    $pontosFuturos[$clube] = $pontos;
}

arsort($pontosFuturos);
return $pontosFuturos;

}

$pontosFuturos = calcularPontos();



foreach($pontosFuturos as $clube => $pontos){
  
   if($pontos % 2 == 0){
       echo $clube . ": " . $pontos + 3 . " pts<br>";
}else{
    echo $clube . ": " . $pontos . " pts<br>";
}

 }

 

 