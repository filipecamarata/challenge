<?php
$clubes = ["Real Madrid", "Barcelona", "Atletico", "Girona", "Valencia"];


function actualizar_pontos($clubes){
    $pontos_iniciais = [30, 21, 20, 16, 15];

    for($i= 0; $i < count($clubes); $i++){
        if($pontos_iniciais[$i] % 2 == 0){
            $pontos_iniciais[$i] +=3;
        }
    }


$clubes_pontos = array_combine($clubes, $pontos_iniciais);

arsort($clubes_pontos);
return $clubes_pontos;

} 


$clubes_pontos_actual = actualizar_pontos($clubes);

foreach ($clubes_pontos_actual as $clube => $pontos ){
    echo $clube . ": " . $pontos . " pts<br>";

}
