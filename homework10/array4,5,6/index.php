<?php
$numbers = [] ;
for($i=11 ; $i<121 ; $i++){
    if($i%2==0)
        array_push($numbers , $i) ;
}

$sum = 0 ;
for($i=0 ; $i<count($numbers) ; $i++){
    echo $numbers[$i] , "<br>" ;
    $sum+= $numbers[$i] ;
}

echo "Sonlar yig'indisi: $sum<br>" ;
$ayirma = $numbers[count($numbers)-1] - $numbers[0] ;
echo "Ro'yxatdagi eng katta va eng kichik sonlar orasidagi farq $ayirma ga teng" ;
?>