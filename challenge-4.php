<?php

$L = $_GET["valorL"];

$a = 19;
$b = 14.6;
$c = 6;

if($L == 1){
    if($a > $b && $a > $c && $b > $c){
        echo $c . "<br>" . $b . "<br>" . $a;

    }elseif ($a > $b && $a > $c && $c > $b){
        echo $b . "<br>" . $c . "<br>" . $a;
    
    }else if ( $b > $a && $b > $c && $a > $c){
        echo $c . "<br>" . $a . "<br>" . $b;
        
    } else if ( $b > $a && $b > $c && $c > $a){
        echo $a . "<br>" . $c . "<br>" . $b;
       
    }else if ( $c > $a && $c > $b && $b > $a){
        echo $a . "<br>" . $b . "<br>" . $c;
           
    } else if ( $c > $a && $c > $b && $a > $b){
        echo $b . "<br>" . $a . "<br>" . $c;
        
    }
}

if ($L == 2){
    if ($a < $b && $a < $c && $b < $c){
        echo $c . "<br>" . $b . "<br>" . $a;
        
    }else if ($a < $b && $a < $c && $c < $b){
        echo $b . "<br>" . $c . "<br>" . $a;
      
    }else if ( $b < $a && $b < $c && $a < $c){
        echo $c . "<br>" . $a . "<br>" . $b;
       
    }else if ( $b < $a && $b < $c && $c < $a){
        echo $a . "<br>" . $c . "<br>" . $b;
        
    }else if ( $c < $a && $c < $b && $b < $a){
        echo $a . "<br>" . $b . "<br>" . $c;
        
    }else if ( $c < $a && $c < $b && $a < $b){
        echo $b . "<br>" . $a . "<br>" . $c;
        
    }
}

if ($L == 3){
    if ($a < $b && $a < $c && $b < $c){
        echo $b . "<br>" . $c . "<br>" . $a;
      
    }else if ($a < $b && $a < $c && $c < $b){
        echo $c . "<br>" . $b . "<br>" . $a;
       
    }else if ( $b < $a && $b < $c && $a < $c){
        echo $a . "<br>" . $c . "<br>" . $b;
        
    }else if ( $b < $a && $b < $c && $c < $a){
        echo $c . "<br>" . $a . "<br>" . $b;
       
    }else if ( $c < $a && $c < $b && $b < $a){
        echo $b . "<br>" . $a . "<br>" . $c;
       
    } else if ( $c < $a && $c < $b && $a < $b){
        echo $a . "<br>" . $b . "<br>" . $c;
        
    }
    return 0;
}


