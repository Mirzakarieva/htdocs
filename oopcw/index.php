<?php

require "Laptop/Brand.php";
require "Laptop/Model.php";
require "Phones/Brand.php";
require "Phones/Model.php";

use Laptop\Brand as LaptopBrand;
use Laptop\Model as Laptopmodeli;
use Phone\Brand as TelefonBrandi;
use Phone\Model as TelefonModeli;

$telefon1= new TelefonBrandi("Apple");
$telefon2= new TelefonModeli("Iphone x");
$noutbuk1= new LaptopBrand("Lenovo");
$noutbuk2= new Laptopmodeli("Lenovo i4");

$noutbuk1->laptopCompany_info();
$noutbuk2->laptopModelInfo();
$telefon1->phoneCompany_info();
$telefon2->phoneModelInfo();

?>
