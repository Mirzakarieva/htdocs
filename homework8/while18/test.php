<?php
$n = $_POST["n"] ;
$razryad = 10 ;
$res = 0 ;

do{
    $ostatok = $n % $razryad ;
    $n -= $ostatok ;
    $n /= 10 ;
    $res = $ostatok ;
    echo $res ;
}while($n > 0) ;


?>