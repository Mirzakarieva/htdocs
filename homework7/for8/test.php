<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$amount = 1 ;

for($i=$a; $i<=$b; $i++){
    $amount *= $i ;
}

echo "Произведение чисел : $amount" ;

?>