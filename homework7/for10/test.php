<?php
$n = $_POST["n"] ;
$s = 0 ;

for($i=1; $i<=$n; $i++)
    $s += (1/$i) ;

echo $s ;

?>