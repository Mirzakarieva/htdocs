<?php

$n = 69 ;
$numbers = [] ;

    

    for($j = 0; $j <$n; $j++){
        if($j%5 == 0 || $j%4 == 0){
            array_push($numbers , $j) ;
        }else{
            continue ;
        }
    }

for($i=0; $i<count($numbers); $i++){
    echo $numbers[$i] , "<br>" ;
}

?>