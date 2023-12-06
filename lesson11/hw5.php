<?php
class Music{
    public $name;
    public $year;
    public $band;

    function __construct($name, $year, $band)
    {
        $this->name = $name;
        $this->year = $year;
        $this->band = $band;
    }
    function get_name(){
        echo "Qo'shiq nomi-". $this->name."<br>";
    }
    function get_year(){
        echo "Chiqarilgan yili:". $this->year."<br>" ;
    }
    function get_band(){
        echo "Guruh nomi-". $this->band."<br><br>" ;
    }
}


$song1 = new Music("Lost in the echo", "2012", "Linkin Park");
$song2 = new Music("Stan", "200","Eminem");
$song3 = new Music("Bring me to life", "2003", "Evanescence");
$song4 = new Music("More", "2020", "KDA");
$song5 = new Music("Even then", "2014", "Lia Michele");

$song1->get_name();
$song1->get_year();
$song1->get_band();

$song2->get_name();
$song2->get_year();
$song2->get_band();

$song3->get_name();
$song3->get_year();
$song3->get_band();

$song4->get_name();
$song4->get_year();
$song4->get_band();

$song5->get_name();
$song5->get_year();
$song5->get_band();



?>