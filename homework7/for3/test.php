<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$amount = 0 ;

for($i=$b-1; $i>$a; $i--){
    echo "$i<br>" ;
    $amount ++ ;
}
 
echo "Количество чисел : $amount" ;

?>