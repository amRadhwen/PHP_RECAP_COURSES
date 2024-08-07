<?php
    declare(strict_types=1);

    echo "<pre>";
    
    // PHP is Lossely Typed Language
    // means you don't have to give variable a type
    // php is automatically associating a type depending on its value
    // means you can add string to an integer without raising an error
    // it's all because data types are not set in strict sense
    
    // from php 7.+ type declaration were added
    
    // strict  keyword
    
    // 1- without strict
    function add($a=5, $b="6 months") {
        return $a + $b;
    }
    //var_dump(add()); // in php 8 it will raise a warning error and returning correct result // 11

    // strict keyword (must be in top of the php file)
    
    function addition(int $a, int $b){ 
        return $a + $b;
                
    }
    var_dump(addition(5, 6));
    //var_dump(addition(5, "6 months")); //this will raise an error
    
    // return type declaration
    function addFloats(float $x, float $y): int {
        return (int)($x + $y);
    }
    var_dump(addFloats(5.3, 5.7));
    
    
    
    
    