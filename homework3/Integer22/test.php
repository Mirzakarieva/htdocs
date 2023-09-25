<?php
$sekund = $_POST["sekund"] ;

$soat = floor($sekund / 3600) ;
$second = $sekund % 3600 ;


echo "Kunning boshidan boshlab $soat soat $second sekund o'tdi"
?>