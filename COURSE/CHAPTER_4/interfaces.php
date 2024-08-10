<?php

    echo "<pre>";
    
    // allow to specify what methods a class should implement
    // make it easy to use a variety of different classes in the same way
    // when one or more classes use the same interface it's referred to as "polymorphism"
    
    // interface keyword
    
    interface InterfaceName {
        public function method1();
        public function method2($name, $color);
        public function method3():string;
    }
    
    // interfaces are similar to abstract classes
    // the differences between interfaces and abstract classes are:
    // interface cannot have properties
    // all interface methods must be public
    // all methods in an interface are abstract so they cannot be implemented in code and the abstract keyword is not necessarry
    // classes can implement an interface while inheriting from another class at the same time
    
    // usage
    // implements keyword
    
    interface Animal {
        public function makeSound();
    }
    
    class Cat implements Animal {
        
        public function makeSound() {
            return "Meow";
        }
    }

    $animal = new Cat();
    var_dump($animal->makeSound());
    
    
    
    
    