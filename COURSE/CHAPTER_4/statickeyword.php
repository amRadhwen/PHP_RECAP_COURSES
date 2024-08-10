<?php


    echo "<pre>";
    
    // static methods/properties can be called directly without creating an instance of the class
    // declared using static keyword
    // access from inside class using self::staticmeth/pro
    // access from outside class using ClassName::staticmeth/prop
    // access from child class using prent::staticmeth/prop
    
    class ClassName {
        public static $message = "Hello World !";
        
        public static function staticMethod() {
            return self::$message;
        }
    }
    
    // access from outside class
    var_dump(ClassName::staticMethod());
    
