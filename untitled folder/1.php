<?php

abstract class Technologies {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}


class Samsung extends Technologies {
  public function intro() : string {
    return "Choose Vietnamian quality! I'm an $this->name!";
  }
}

class Apple extends Technologies {
  public function intro() : string {
    return "Proud to be American! I'm a $this->name!";
  }
}

class Redmi extends Technologies {
  public function intro() : string {
    return "Chinese extravagance! I'm a $this->name!";
  }
}


$samsung = new Samsung("Samsung");
echo $samsung->intro();
echo "<br>";

$apple = new Apple("Apple");
echo $apple->intro();
echo "<br>";

$redmi = new redmi("Redmi");
echo $redmi->intro();
?>