<?php
$n = $_POST["n"] ;

function faktorial($num){
    $number =1 ;
    for($i = $num; $i > 0; $i--){
        $number *= $i ;   
    }
    return $number ;
}

echo faktorial($n) ;

?>