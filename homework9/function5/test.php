<?php
$num = $_POST["num"] ;


function info($num1){
    $c = 2 ;
    do{
        $res = $num1 % $c ;
        if($res == 0)
            echo "$num1 $c ga qoldiqsiz bo'linadi<br>" ;
        else
            echo "$num1 $c ga qoldiqsiz bo'linmidi<br>" ;
        $c++ ;
    }while($c <= 10) ;
}

info($num) ;
?>