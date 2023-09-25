<?php
$a = $_POST["a"] ;


for($i=1.2; $i<=2; $i+=0.2){
    $cost = $a*$i ;
    echo "$i kg of sweets costs $cost $<br>" ;
}
 
?>