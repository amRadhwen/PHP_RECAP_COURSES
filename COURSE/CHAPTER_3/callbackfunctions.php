<?php

    echo "<pre>";
    
    // function passed as argument into another function
    
    // call in built-in functions
    // array_map()
    
    function cllback($item) {
        return strlen($item);
    }
    
    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("cllback", $strings);
    var_dump($lengths);
    
    // passing anonymous function as callback
    $lnghts = array_map(function($item){
        return strlen($item);
    }, $strings);
    
    var_dump($lnghts);

    // call in user defined functions
    function exclaim($str) {
        return $str. " !";
    }
    
    function ask($str) {
        return $str. " ?";
    }
    
    function printFormatted($str, $format /*format is a callback function*/) {
        echo $format($str)."\n";
    }
    
    printFormatted("are you okey", "ask");
    printFormatted("is that true", "exclaim");
    
    
    
    