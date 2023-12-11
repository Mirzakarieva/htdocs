<?php
require('generall.php');
$samsung1= new Samsung("telephone","2012","S pen","32GB", "5 inch", "sensor","Android", "Samsung A12", "red");
echo $samsung1->android();

$samsung2 = new Samsung("telephone","2019", "calling","64GB","6.8 inch","sensor", "Android", "Samsung Note2", "Titanium gray");
$samsung2->get_info();

$samsung3 = new Samsung("telephone","2022", "calling","128GB","7 inch","sensor", "Android", "Galaxy Note 20", "black");
echo $samsung3->source();

?>

