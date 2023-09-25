<?php
$n = $_POST["n"] ;
$s = 0 ;

for($i=0; $i<=$n; $i++)
    $s += ($n+$i)**2 ;

echo $s ;

?>