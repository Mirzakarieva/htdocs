<?php
$n = $_POST["n"] ;
$i = 0 ;
$a = 1 ;

do{
    $res = $i + $a ;
    $i = $a ;
    $a = $res ;
    if($res == $n)
        $result = "Bor" ;
    else
        $result = "Yo'q" ;
}while($res < $n) ;
     
echo $result ;
?>