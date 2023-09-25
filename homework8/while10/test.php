<?php
$n = $_POST["n"] ;
$k = 0 ;

while($n>=pow(3, $k)){ 
    $k++ ;
}

$k -= 1 ;

echo "k=$k" ;
?>