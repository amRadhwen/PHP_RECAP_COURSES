<?php

    echo "<pre>";

    // PHP operators are divided into
    // 1- Arithmetic operators
    // 2- Assignement operators
    // 3- Comparison operators
    // 4- Increment/Decrement operators
    // 5- Logical operators
    // 6- String operators
    // 7- Array operators
    // 8- Conditional assignement operators (ternary)


    // 1- Arithmetic operators
    // +, -, *, /, %, **, 
    var_dump(2**2);
    var_dump(25%2);
    // 2- Assignement operatos
    // =, +=, -=, *=, /=, %=
    $x = 2;
    $y = 0;
    $y += $x;
    var_dump($y);

    // 3- Comparaison operators
    // ==, ===, !=, !==, >, <, >=, <=, <=>
    // <=> return -1, 0 or 1 
    // less than return -1
    // greater than return 1
    // equal to return 0
    var_dump(5 <=> 6);
    var_dump(7 <=> 6);
    var_dump(6 <=> 6);

    // Increment / Decrement operators
    // signe position define post or pre increment/decrement
    // ++$x, --$x, $x--, $x++,  
    // ++$x: increment then return
    // $x++: return than decrement
    $x = 5;
    var_dump($x++); // return x wich is 5 than increment by 1 // 5
    // $x is now 6
    var_dump($x); // 6
    var_dump(--$x); // decrement x by 1 from 6 to 5 than return $x wich is now 5
    var_dump($x); // 5

    // Logical operators
    // and/&& , or//||, xor, !
    // and: true if both are true
    // or: true if one is true
    // xor: true if either $x or $y is true BUT not both 
    var_dump(true xor true); //return false
    // !: true if $x is not true
    var_dump(!false);

    // String operators
    // .: concatenation
    // .= concatenation assignement
    $txt1 = "Hello";
    $txt2 = " World !";
    $txt1 .= $txt2;
    var_dump($txt1);

    // Array operators
    // + union
    // == equality
    // === identity (two arrays have the same key/value in the same order and in the same types)
    // != inequality
    // <> inequality same as !=
    // !== non-identity
    $arr1 = [1, 2, 3];
    $arr2 = [1, 2, 3];
    var_dump($arr1 + $arr2); //return indexed array where $arr1 values as keys and $arr2 values are values for those keys
    var_dump($arr1 == $arr2); //return true
    var_dump($arr1 === $arr2); //return true
    var_dump($arr1 != $arr2); //return false
    var_dump($arr1 !== $arr2); //return false
    var_dump($arr1 <> $arr2); //return false
    
    // PHP Conditional assignment operators
    // ?: Ternary
    $x = 5;
    $y = 6;
    $z = $x < $y ? 20 : 22; //$z = 20 if $x < $y else $z = 22 // return 20;
    var_dump($z);

    // ?? Null Coalescing
    $a = 5;
    $b = 6;
    $c = $a ?? $b; // $c = 5 if $a exists and not Null else $c = 6 // return 5;
    var_dump($c);