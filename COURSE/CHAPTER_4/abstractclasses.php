<?php

    echo "<pre>";
    
    // abstract classes/ methods
    // when parent class has a named method but need its child classes to fill out the tasks
    
    // abstract class contains at least one abstract method
    // abstract method is a method that is declared but not implemented in the code
    
    // abstract class/method id defined with the abstract keyword
    
    abstract class ParentClass {
        abstract public function method1();
        abstract public function method2($name, $color);
        abstract public function method3():string;
    }
    
    // when inheriting form abstract class the child class:
    // method must be defined with the same name
    // abstract methods access modifier must be the same or less restricted
    // method type and args number must be the same, However the child classes may have optional args in addition
    
    // Parent class
    abstract class Car {
        public $name;
        
        public function __construct($name) {
            $this->name = $name;
        }
        
        abstract public function intro($speed):string;
    }
    
    // Child classes
    class Audi extends Car {
        
        public function intro($speed):string {
            return "Car model: {$this->name}";
        }
    }
    
    class Volvo extends Car {
        
        public function intro($speed):string {
            return "Car model: {$this->name}";
        }
    }
    
    class Bmw extends Car {
        
        public $unit = "MPH";
        
        public function intro($speed, $unit="kMS"):string {
            return "Car model: {$this->name}, Speed: $speed/$this->unit";
        }
    }
    
    // Objects
    $audi = new Audi("Audi");
    $volvo = new Volvo("Volvo");
    $bmw = new Bmw("BMW");
    
    var_dump($audi->intro("180"));
    var_dump($volvo->intro("180"));
    var_dump($bmw->intro("200"));
    
    
    
    
    
    
    
    
    