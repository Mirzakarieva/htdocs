<?php

abstract class Snacks {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}


class Chokolate_bar extends Snacks {
  public function intro() : string {
    return "I have too much calories! I'm a $this->name!";
  }
}

class Chips extends Snacks {
  public function intro() : string {
    return "I'm tasty! I'm a $this->name!";
  }
}

class Popcorn extends Snacks {
  public function intro() : string {
    return "Moovies with a $this->name!";
  }
}


$chokolate_bar = new Chokolate_bar("Chokolate_bar");
echo $chokolate_bar->intro();
echo "<br>";

$chips = new Chips("Chips");
echo $chips->intro();
echo "<br>";

$popcorn = new Popcorn("Popcorn");
echo $popcorn->intro();
?>