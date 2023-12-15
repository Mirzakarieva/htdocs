<?php

abstract class Cars {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

class Daewoo extends Cars {
  public function intro() : string {
    return "I'm old! I'm a $this->name!";
  }
}

class Chevrolet extends Cars {
  public function intro() : string {
    return "I'm alive! I'm a $this->name!";
  }
}

class Ravon extends Cars {
  public function intro() : string {
    return "Yangi Uzbekistan! I'm a $this->name!";
  }
}


$daewoo = new Daewoo("Daewoo");
echo $daewoo->intro();
echo "<br>";

$chevrolet = new Chevrolet("Chevrolet");
echo $chevrolet->intro();
echo "<br>";

$ravon = new Ravon("Ravon");
echo $ravon->intro();
?>