<?php
$n = $_POST["n"] ;
$razryad = 10 ;
$res = 0 ;


do{
    $ostatok = $n % $razryad ;
    $n -= $ostatok ;
    $n /= 10 ;
    if($ostatok == 2)
        $res = "Bor";
    else
        continue ;
}while($n > 0) ;

echo $res ;


?>