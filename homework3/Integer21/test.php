<?php
$sekund = $_POST["sekund"] ;

$minut = floor($sekund / 60) ;
$second = $sekund % 60 ;


echo "Kunning boshidan boshlab $minut minut $second sekund o'tdi"
?>