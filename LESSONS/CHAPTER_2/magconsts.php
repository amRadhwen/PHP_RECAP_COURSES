<?php

    echo "<pre>";

    // PHP has predefined constants called Magic Constants
    // __CLASS__ , if used inside class it returns the class name
    class Car {
        public function clsName() 
        {
            return __CLASS__;
        }
    }

    $car = new Car();
    var_dump($car->clsName());
    var_dump(__CLASS__); // return empty string cz it's used outside a class
    
    /*
        __DIR__ return directory of current file
        __FILE__ return filename including full path
        __FUNCTION__ return function name (only if inside function)
        __LINE__ return code line number
        __METHOD__ return both method and class names only if used inside method that belong to a class
        __NAMESPACE__ return namespace name if used inside namespace
        ClassName::class return name of specified class and name of namespace
    */
    var_dump(stdClass::class);
    var_dump(Car::class);
    // magic constants aren't case sensitive
    // __LINE__ is the same as __Line__ or __line__