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
    