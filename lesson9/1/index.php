<?php
function power($a , $b){
$s = 1 ;
for($c = 1;$c <= $b ;$c++){
    $s *= $a ;
    
}
    echo $s ;
}

power(12 , 2) ;


?>