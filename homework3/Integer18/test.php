<?php

$num = $_POST["num"] ;

$butun = floor($num / 1000) ;
$qoldiq = $butun % 10 ;



echo "Тысячи-$qoldiq" ;

?>