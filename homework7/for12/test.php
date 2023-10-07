<?php
$n = $_POST["n"] ;
$a = 0 ;
$p = 1 ;
$s = 1 ;

for($i=1; $i<=$n; $i++){
    $s += 0.1 ;
    $p *= $s ;
}
   
echo $p ;

?>