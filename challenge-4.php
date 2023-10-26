<?php

$L = $_GET["valorL"];

$A = 10;
$B = 14.5;
$C = 7;

if($L == 1){
    echo $C . "<br>" . $A . "<br>" . $B;
}elseif($L == 2){
    echo $B . "<br>" . $A . "<br>" . $C; 
}elseif($L == 3){
    echo $A . "<br>" . $B . "<br>" . $C;   
}