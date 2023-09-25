<?php
$n = $_POST["n"] ;
$k = 0 ;

do{
    $k++ ; 
    $kvadrat = $k**2 ;
    
}while($n>=$kvadrat);

echo "k=$k" ;
?>