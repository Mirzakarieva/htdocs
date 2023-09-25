<?php
$a = 3 ;
$n = 149 ;

do{
    $a++ ;
    if( $a%3 == 0 || $a%5 == 0)
        echo "$a<br>" ;
   
}while($a<$n)
?>