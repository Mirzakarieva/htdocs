<?php
$n = $_POST["n"] ;
$i = 2 ;
$a = 0 ;

while($i<$n){
    
    if($n % $i == 0)
        $a++ ;
    $i++ ;                                                 
} ;
     
if($a>0 )
    echo "Tub emas" ;
else 
    echo "Tub" ;
?>