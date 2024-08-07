<?php
    echo "<pre>";
    // 1- Integers
    // There is 3 main numeric types in PHP
    // Integer, Float and Number Strings
    // in addition there are two more data types
    // Infinity, NaN

    $x = 5;
    $y = 13.56;
    $z = "10";
    var_dump($x);
    var_dump($y);
    var_dump($z);
    // int min , max and regular size
    var_dump(PHP_INT_MIN);
    var_dump(PHP_INT_MAX);
    var_dump(PHP_INT_SIZE);

    // Check if variable is int
    // is_int();
    // is_integer();
    // is_long();
    var_dump(is_int($x));
    var_dump(is_int($y));
    var_dump(is_int($z));
    // tha same using is_integer()
    var_dump(is_long(1265465434564));

    // 2-Floats
    // all numbers with decimal point
    $v = 3.14;
    
    // is_float(); is_double(); check if number is float or double
    var_dump(is_float($v));
    
    // float min, max and regular size
    var_dump(PHP_FLOAT_MIN);
    var_dump(PHP_FLOAT_MAX);
    var_dump(PHP_FLOAT_DIG); //return the number of decimal digits that can be rounded into float without precision loss
    var_dump(PHP_FLOAT_EPSILON); // smallest representable positivr number
    
    // check if float number is finite or infinite
    // PHP_FLOAT_MAX is considered as finite
    var_dump(is_infinite(PHP_FLOAT_MAX));
    var_dump(is_finite(PHP_FLOAT_MAX));

    // NAN is used with impossible math operations
    // is_nan(); check if value is not a number
    //var_dump(3.145 + "15.23c"); // return error non-numeric value encountred

    // PHP Numerical Strings
    // is_numeric(); check if string can be used to find whether a vaiable is numeric
    $x = 3215;
    $y = "3215";
    $z = "324.15" + 3215;
    $v = "Hello";
    $w = "123Hi";
    var_dump(is_numeric($x));
    var_dump(is_numeric($y));
    var_dump(is_numeric($z));
    var_dump(is_numeric($v));
    var_dump(is_numeric($w));

    // Casting
    // casting strings using (int) return int 0
    // casting strings starting with degits return only the starting digits as int
    $hww = "Hello world !";
    $hiw = "Hi";
    $hw = "Hello 123 World !";
    $hi = "123Hi";
    $hi2 = "Hi123";
    $x = 12354.154;
    var_dump((int)$x);
    var_dump((int)$hw);
    var_dump((int)$hi);
    var_dump((int)$hi2);
    var_dump((int)$hww);
    var_dump((int)$hiw);