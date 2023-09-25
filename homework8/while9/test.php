<?php
$n = $_POST["n"] ;
$k = 0 ;

while($n>=pow(3 , $k)){ 
    $k++ ;
}

echo "k=$k" ;
?>