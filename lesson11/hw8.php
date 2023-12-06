<?php
class Art{
    public $name;
    public $painter;
    public $year;

    function __construct($name, $painter, $year)
    {
        $this->name = $name;
        $this->painter = $painter;
        $this->year = $year;
    }
    function get_name(){
        echo "Asar nomi-". $this->name."<br>";
    }
    function get_painter(){
        echo "Rassom:". $this->painter."<br>" ;
    }
    function get_year(){
        echo "Yili-". $this->year."<br><br>" ;
    }
}


$art1 = new Art("Devochka s persikami", "Valentin Serov", "1887");
$art2 = new Art("Mona lisa", "Leonardo da Vinchi","1503");
$art3 = new Art("Black square", "Malevich", "1915");
$art4 = new Art("Irises", "Vinsent Van Gok", "1889");
$art5 = new Art("The Artist's Garden at Giverny ", "Claude Monet", "1900");

$art1->get_name();
$art1->get_painter();
$art1->get_year();

$art2->get_name();
$art2->get_painter();
$art2->get_year();

$art3->get_name();
$art3->get_painter();
$art3->get_year();

$art4->get_name();
$art4->get_painter();
$art4->get_year();

$art5->get_name();
$art5->get_painter();
$art5->get_year();



?>