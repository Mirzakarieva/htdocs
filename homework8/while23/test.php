<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

$d = 1 ;

do{

    $d ++ ;    

    if($a % $d == 0 && $b % $d == 0){
        $res = $d ;
    }

}while($a > $d || $b > $d) ;



echo "$res<br>" ;
?>