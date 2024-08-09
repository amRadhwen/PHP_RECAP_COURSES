<?php

    echo "<pre>";
    // Object oriented programming
    // OOP keeps php script DRY (don't repeat yourself);
    
    // classes
    // Act as blueprint/template for the object
    // class variables are called properties
    // class functions are called methods
    // $this keyword referes to the current object
    
    // objects
    // instance of a class
    
    // class
    
    class Fruit{
        public $name;
        public $color;
        
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
    }
    
    // object
    $apple = new Fruit();
    
    // instanceof // check if an object is an instance of a class
    var_dump($apple instanceof Fruit); //return True
    
    // call methods
    $apple->setName("Apple");
    $apple->setColor("Red");
    
    var_dump($apple->getName());
    var_dump($apple->getColor());
    
    
