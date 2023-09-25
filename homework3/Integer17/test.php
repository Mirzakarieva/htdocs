<?php

$num = $_POST["num"] ;

$butun = floor($num / 100) ;
$qoldiq = $butun % 10 ;



echo "Сотни-$qoldiq" ;

?>