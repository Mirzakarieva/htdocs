<?php
$n = $_POST["n"] ;
$k = 0 ;

while($n>$k**2){ 
    $k++ ;
}

$k -= 1 ;

echo "k=$k" ;
?>