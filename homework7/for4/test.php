<?php
$a = $_POST["a"] ;
$cost = 0 ;

for($i=1; $i<=10; $i++){
    $cost += $a ;
    echo "$i kg of sweets costs $cost $<br>" ;
}
 


?>