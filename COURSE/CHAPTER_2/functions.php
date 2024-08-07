<?php

    echo "<pre>";
    
    // php functions
    // php comes with more than 1000 built-in functions
    // function name must start with a letter of underscore
    // functions names are not case-sensitive
    
    function sayHello() {
        var_dump("Hello World !");
    }
    
    sayHello(); // display string and return Null
    
    // function arguments
    function sayHelloTo($name) {
        var_dump("Hello $name");
    }
    sayHelloTo("Github community");
    
    // default argument value
    // if argument is not set when calling the function default value will be auto used
    function sayHiTo($name = "Jack") {
        var_dump("Hi $name");
    }
    
    sayHiTo();
    sayHiTo("Github community");
    
    // Returning values
    function sum($x, $y) {
        if(is_int($x) && is_int($y)) return $x +$y;
        else return false;
    }
    var_dump(sum(6, 5));
    var_dump(sum(7, "3"));
    
    
    // previous examples show passing arguments by values
    // means values can be changed only inside local function scope
    function tryToChange($x) {
        $x += 1;
    }
    $val = 5;
    tryToChange($val);
    var_dump($val);
    
    // passing argumuments by reference
    function tryToChangeAgain(&$x) {
        $x +=1;
    }
    
    $vall = 6;
    tryToChangeAgain($vall);
    var_dump($vall); //display 7
    
    
    // variable number of arguments
    // $args is an array of values entered and separated by comma
    function calSum(...$args) {
        $sum = 0;
        foreach($args as $arg) $sum += $arg;
        return $sum;
    }
    
    var_dump(calSum(1, 2, 3, 4, 5)); //return 15
    
    // mixed args
    // function($arg1, ...$args){...} the variadic must be always the one or an error is raised.