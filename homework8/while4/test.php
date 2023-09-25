<?php
$n = $_POST["n"] ;
$c = 1 ;

do{
$c *= 3 ;
}while($n>$c);

if($n == $c)
    echo "3-ning darajasi" ;
else
    echo "3 -ning darajasi emas" ;

?>