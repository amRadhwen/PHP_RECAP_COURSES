<?php

    echo "<pre>";
    
    // PHP only supports single inheritance: child class can inherit from only one Parent class
    // Traits
    // used to declare methods that can be used in multiple classes.
    // can have methods and abstract methods that can be used in multiple classes and 
    // the methods can have any access modifier (public, protected or private)
    
    // trait keyword
    
    trait TraitName {
        // code
    }
    
    // usage
    class ClassName {
        use TraitName;
    }
    
    // Example
    
    trait message1 {
        public function msg1() {
            return "OOP is Funny !";
        }
    }
    
    trait message2 {
        public function msg2() {
            return "OOP in more Fuuny !";
        }
    }
    
    class Welcome {
        use message1, message2; // using multiple traits
    }
    
    $welcome = new Welcome();
    var_dump($welcome->msg1());
    var_dump($welcome->msg2());

