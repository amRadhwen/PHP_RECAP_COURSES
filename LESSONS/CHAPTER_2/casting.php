<?php
    echo "<pre>";
    // casting means data type changing if possible
    // (string), (int), (float), (double), (bool), (array), (object), (unset);
    // (unset) is no longuer supported in php v7
    $x = 5;
    $hw = "Hello World !";
    var_dump((float)$x);
    var_dump((string)$x);
    var_dump((bool)$x);
    var_dump((array)$hw);
    var_dump((object)$x); // return object using stdClass
    var_dump((string)NULL); // return empty string
    var_dump((string)true); // return string "1"
    var_dump((string)false); // return empty string
    var_dump((array)NULL); // return empty array
    // converting to array return indexed array
    var_dump((array)"Hello");

    // casting object to array
    class Car {
        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function __tostring() {
            return "[CAR: $this->model, COLOR: $this->color]";
        }
    }
    var_dump((array)new Car("Black", "BMW")); // return indexed array (properties are keys an there values are values);

    // Casting to Object
    var_dump((Object)5);
    var_dump((Object)"");
    var_dump((Object)"Hello World");
    var_dump((Object)0);
    var_dump((Object)-1);
    var_dump((Object)true);
    var_dump((Object)false);
    var_dump((Object)NULL); // empty stdClass
    var_dump((Object)[1, 2, 3]);
    var_dump((Object)["color"=>"Black", "model"=>"BMW"]);
