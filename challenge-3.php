<?php

function multiplosDe2(){
    $multiplos = array(20, 21, 34, 3, 8, 40, 24, 2, 66, 0);

foreach($multiplos as $k => $int){
    $multiplos[$k] = $int;

}
if($int % 2 == 0){
       
  echo $int ;     
}

arsort($multiplos);
 
}

$multi = multiplosDe2();
echo $multi;