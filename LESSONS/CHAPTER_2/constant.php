<?php
    echo "<pre>";
    // const is an identifier for simple value that cannot be changed
    // const name starts with letter or underscore _
    // constant are global across the entire script
    // define()
    
    define("PI", 3.14);
    var_dump(PI);

    // const keyword
    const PII = 3.14;
    var_dump(PII);

    // const keyword can not be used inside another block-scope
    function createConst() {
        //const X = 123; // return error
        $x = 5;
        define("X", 15);
        var_dump(X);
    }
    createConst();
    var_dump(X); // can be accessed outside local Scope
    // var_dump($x); // error $x is declared in local scope

    // const array
    define("NUMS", ["one", "two", "three"]);
    var_dump(NUMS[0]);