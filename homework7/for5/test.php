<?php
$a = $_POST["a"] ;
$cost = 0 ;

for($i=0.1; $i<=1; $i+=0.1){
    $cost += $a/10 ;
    echo "$i kg of sweets costs $cost $<br>" ;
}
 


?>