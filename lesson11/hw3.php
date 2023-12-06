<?php
class Kitob{
    public $name;
    public $subject;
    public $language;

    function __construct($name, $subject, $language){
        $this->name= $name;
        $this->subject= $subject;
        $this->language= $language;
    }

    function get_name(){
        echo "Nomi:". $this->name. "<br>";
    }

    function get_subject(){
        echo "Subject:". $this->subject. "<br>";
    }

    function get_language(){
        echo "Tili:". $this->language. "<br><br>";
    }
   
}

$book1= new Kitob("Atomic habbits", "Psycology", "English");
$book2= new Kitob("Minna no Nihongo ", "Filology", "Japanese");
$book3= new Kitob("Kapitanskaya dochka", "Literature", "Russian");
$book4= new Kitob("Usmonov", "Math", "Uzbek");
$book5= new Kitob("Muallimi Soniy", "Filology", "Arabic");

$book1->get_name();
$book1->get_subject();
$book1->get_language();

$book2->get_name();
$book2->get_subject();
$book3->get_language();

$book3->get_name();
$book3->get_subject();
$book3->get_language();

$book4->get_name();
$book4->get_subject();
$book4->get_language();

$book5->get_name();
$book5->get_subject();
$book5->get_language();
?>