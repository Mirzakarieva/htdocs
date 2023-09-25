<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$amount = 0 ;

for($i=$a; $i<=$b; $i++){
    $amount += $i**2 ;
}

echo "Сумма квадратов чисел : $amount" ;

?>