<?php
    echo "<pre>";
    // PHP Data Types
    // 1-String
    // using double or single quotes
    $x = "Hello world !" ;
    $y = 'Hello world !';
    var_dump($x);
    var_dump($y);

    // 2- Integer
    $a = 1546;
    var_dump($a);

    // 3- Float
    $b = 151.2254;
    var_dump($b);

    // 4- Boolean
    $c = true;
    $d = false;
    $e = 1 == 4;
    var_dump($c);
    var_dump($d);
    var_dump($e);

    // 5- Array
    $nums = array("one", "two", "three", "four");
    $nms = ["one", "two", "three", "four"];
    $mixed = ["one", 2, 3.0, false, NULL, ["six", "seven"]];
    var_dump($nums);
    var_dump($nms);
    var_dump($mixed);

    // 6- Object
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function displayCar() {
            return "[Car Model: $this->model, Car Color: $this->color]";
        }
    }
    $bmw = new Car("Black", "BMW");
    var_dump($bmw);
    var_dump($bmw->displayCar());

    // 7- NULL
    $nll = NULL;
    var_dump($nll);
    //var_dump($nl); // return error "undefined variable $nl" with type NULL

    // 8- change data type
    // using assignement
    $x = 5;
    var_dump($x);
    $x = "Hi";
    var_dump($x);
    // using casting
    $x = 1354684;
    $x = (string) $x;
    var_dump($x);
    $x = (float) $x;
    var_dump($x);

    // 9- Resource 
    // not an actual data type
    // storing a reference to a functions and resources external to PHP
    // exp: database call   

