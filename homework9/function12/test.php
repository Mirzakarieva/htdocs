<?php
$x = $_POST["x"] ;

function check($num){
    $c = 0;
do{
    $c++ ;
    for($i = 0 ; $i <$c; $i++)
    echo "$c<br>" ;
}while($c < $num);
}

check($x) ;
?>