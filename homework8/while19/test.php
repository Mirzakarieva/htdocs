<?php
$n = $_POST["n"] ;
$razryad = 10 ;
$res = 0 ;
$son = 0 ;

do{
    $ostatok = $n % $razryad ;
    $n -= $ostatok ;
    $n /= 10 ;
    $res += $ostatok ;
    $son ++ ;
}while($n > 0) ;

echo "Raqamlar yig'indisi :$res<br>" ;
echo "Raqamlar soni :$son" ;
?>