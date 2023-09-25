<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$amount = 0 ;

for($i=$a; $i<=$b; $i++){
    $amount += $i ;
}

echo "Сумма чисел : $amount" ;

?>