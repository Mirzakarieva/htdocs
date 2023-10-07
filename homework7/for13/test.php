<?php
$n = $_POST["n"] ;

$s = 1 ;

$res = 0 ;

for($i=0; $i<$n;$i ++){
    $s += 0.1 ;
    if(($s*10) % 2 == 0)
        $res -= $s ;
    else
        $res += $s ;
}
   
echo $res ;

?>