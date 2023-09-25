<?php
$c = $_POST["c"] ;
$a = $_POST["a"] ;

$b = sqrt($c**2 - $a**2) ;
$r = ($a*$b) / ($a + $b + $c) ;

echo "Uchburchakning ikkinchi kateti $b ga teng.<br>" ;
echo "Uchburchakka ichki chizilgan aylana radiusi $r ga teng." ;
?>