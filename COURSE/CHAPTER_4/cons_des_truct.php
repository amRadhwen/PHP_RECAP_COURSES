<?php

    echo "<pre>";
    // __construct
    // allow object properties initialization upon creation of the object
    
    //__destruct
    // called when the object is destructed or the script is stopped or exited
    //auto called at the end of the script
    
    class Fruit{
        public $name;
        public $color;
        
        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        
        function setName($name) {
            $this->name = $name;
        }
        
        function setColor($color) {
            $this->color = $color;
        }
        
        function getName() {
            return $this->name;
        }
        
        function getColor() {
            return $this->color;
        }
        
        public function __destruct() {
            echo "The Fruit is {$this->name}";
        }
        
    }
    
    $apple = new Fruit("Apple", "Red");
    var_dump($apple->getName());
    var_dump($apple->getColor());

