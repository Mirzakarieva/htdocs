<?php
class Cartoons{
    public $name;
    public $year;
    public $company;

    function __construct($name, $year, $company)
    {
        $this->name = $name;
        $this->year = $year;
        $this->company = $company;
    }
    function get_name(){
        echo "Film nomi-". $this->name."<br>";
    }
    function get_year(){
        echo "Chiqarilgan yili:". $this->year."<br>" ;
    }
    function get_company(){
        echo  $this->company."  mahsuloti<br><br>" ;
    }
}


$cartoon1 = new Cartoons("Ну, погоди!", "1969", "Союзмультфильм");
$cartoon2 = new Cartoons("Beauty and the Beast", "1991","Disney");
$cartoon3 = new Cartoons("Monster corporation", "2001", "Pixar");
$cartoon4 = new Cartoons("Legends of Oz", "2014", "Prana Studios Summertime Entertainment");
$cartoon5 = new Cartoons("Moana", "2016", "Disney");

$cartoon1->get_name();
$cartoon1->get_year();
$cartoon1->get_company();

$cartoon2->get_name();
$cartoon2->get_year();
$cartoon2->get_company();

$cartoon3->get_name();
$cartoon3->get_year();
$cartoon3->get_company();

$cartoon4->get_name();
$cartoon4->get_year();
$cartoon4->get_company();

$cartoon5->get_name();
$cartoon5->get_year();
$cartoon5->get_company();



?>