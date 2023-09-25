<?php
$sekund = $_POST["sekund"] ;

$soat = floor($sekund / 3600) ;
$minut = floor($sekund/60) - $soat*60 ;
$second = $sekund % 60 ;


echo "Kunning boshidan boshlab $soat soat $minut minut $second sekund o'tdi"
?>