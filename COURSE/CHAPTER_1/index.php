<?php
    echo "<pre>";
    // 1- Case sensitivity
    // keywords are not case sensitive

    echo "Hello ";
    ECHO "Hello";
    echo "\n";
    // variables names are case sensitive
    $var_1 = "Hi";
    $VAR_1 = "Hello";

    echo $var_1." ".$var_1;
    echo "\n";

    // 2- Comments
    // single line comments
    $x = "Hello" ." World" . " ! ";// . "ignore this text"; using single line comment
    echo $x;
    $x = "Hello" ." World" . " !";# . "ignore this text"; using single line comment
    echo $x;
    echo "\n";
    // Multi-line comments
    /* this is a 
        multi-line
        comment
    */
    // comments are used for code description, documentation and code ignore.

    // 3- Vaiables
    // Declaration (start with $, start with letter or underscore ,use only alphanumeric caracters and underscores, case sensitive)
    $x = 5;
    $X = "Hi";
    print $x;
    echo "\n";
    // Vaiables Types:
    // String, Integer, Float(alse called doublae), Boolean, Array, Object, NULL, Resource
    // get variable type using var_dump()
    $x = 5;
    var_dump("Hello world !") ;
    var_dump(5);
    var_dump(5.5);
    var_dump(true);
    var_dump([1, 2, 3]);
    var_dump(new SessionHandler());
    var_dump(NULL);
    echo "\n";
    // Assign multiple values
    $x = $y = $z = 20;
    print $x. $y. $z;
    echo "\n";
    // Variables Scope
    // global (declared and accessible only outside a function)
    $xx = 15;
    function changeXX() {
        // echo $xx; return an error "undefined variable"
        $xx = 20;
    }
    changeXX();
    print $xx;
    echo "\n";

    // local (Declared and accessible only inside a function)
    
    function declareYY() {
        $yy = 12;
    }
    // echo $yy; return error "undefined variable"

    // global as keyword: gives access to variables from within a function
    $a = 5;
    $b = 6;
    function sum() {
        global $a, $b;
        echo $a + $b;
    }
    sum();
    echo "\n";
    // All global variables are stored in $GLOBALS array
    var_dump($GLOBALS);
    // static variables (prevent local variables from being deleted from memory after function execution)
    function staticTest() {
        static $x = 1;
        print($x++);
    }
    staticTest();
    staticTest();
    staticTest();
    staticTest();
    staticTest();
    echo "\n";
    // echo and print statements
    // both used to output data to the screen
    // difference "echo" can take multiple parameters and has no return value
    //            "print" takes only one parameter and return 1
    // both can be used with or without ()
    echo "Hello";
    echo("Hello");
    print "Hi";
    print("Hi");
    echo "\n";
    // used also to diplay variables values
    $world = "World !";
    echo "Hello $world";
    //single quotes are different must use . to concatenate variables with string
    $ww = "World !";
    //echo 'Hello $ww'; this not gonna work !!!
    echo 'Hello'.$ww;
    echo "\n";
