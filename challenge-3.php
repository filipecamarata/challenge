<?php

$multiplos = array(20, 21, 34, 3, 8, 57, 24, 2, 66, 0);

function multiplosDe2($multiplos){
   
rsort($multiplos);
return $multiplos;
 
}

$multi = multiplosDe2($multiplos);

foreach($multi as $v){
    if($v % 2 == 0){
        echo  $v . "<br>";
    }
    
}
