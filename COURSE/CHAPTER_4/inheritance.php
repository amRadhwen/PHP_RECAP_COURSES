<?php

    echo "<pre>";
    
    // when a class derives from another class
    // child class inherit all public and protected properties and methods from the parent class
    // inherited class is defined by using "extends" keyword
    
    class Fruit{
        public $name;
        public $color;
        
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        
        protected function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}.\n";
        }
    }
    
    // Apple is inherited from Fruit
    
    class Apple extends Fruit {
        public function message() {
            echo "This is class Apple. \n";
            $this->intro();
        }
    }
    
    $apple = new Apple("Apple", "Red");
    $apple->message();
    //$apple->intro();
