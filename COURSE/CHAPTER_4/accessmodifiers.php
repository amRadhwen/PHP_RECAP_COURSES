<?php

    echo "<pre>";
    
    // properties and methods have access modifiers that control where thay can be accessed
    // public - can be accessed from everywhere, by default
    // protected - can be accessed within the class and by classes drived from that class (inheriting from the class)
    // private - can be ONLY accessed within the class
    
    class Fruit {
        public $name;
        protected $color;
        private $weight;
        
        function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        
        protected function setName($name) {
            $this->name = $name;
        }
        
        protected function setColor($color) {
            $this->color = $color;
        }
        
        private function setWeight($weight) {
            $this->weight = $weight;
        }
        
        public function getName(){
            return $this->name;
        }
        public function getColor(){
            return $this->color;
        }
        public function getWeight(){
            return $this->weight;
        }
        
        
        function __destruct() {
            echo "Fruit ;)\n";
            return true;
        }
        
    }
    
    //$apple = new Fruit();
    //$apple->name = "Apple";
    //$apple->color = "Red"; // Error
    //$apple->weight = "80"; //Error
    
    $banana = new Fruit("Banana", "Yellow", 200);
    //$banana->setColor("Red"); //ERROR method is protected
    var_dump($banana->getName());
    var_dump($banana->getColor());
    var_dump($banana->getWeight());

