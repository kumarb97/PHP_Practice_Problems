<?php
class Fruits {
    public $name;
    public $color;

    public static function welcome() {
        echo "Hello, I am from static function \n";
      }

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct() {
        echo "I am from from destructor function,i will get executed at the end always \n";
      }

    public function setName($name){
        $this->name = $name;
    }

    protected function getName(){
        return $this->name;
    }
}

class Strawberry extends Fruits {
    public $weight;

    public function message() {
      echo "I am from Strawberry class \n";
    }
    public function inheritanceCheck(){
        return $this-> getName();
    }
  }
  $strawberry = new Strawberry("Strawberry", "red",);
  $strawberry->message();
  echo "name:" . $strawberry->inheritanceCheck() . "\n";
  Fruits :: welcome();

?>