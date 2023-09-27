<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function multiplication($a1 , $b1){
    $multiply = $a1*$b1 ;
    $devide = $a1/$b1 ;
    echo "Ko'paytma:$multiply <br> Bo'linma:$devide" ;
}

multiplication($a , $b) ;

?>