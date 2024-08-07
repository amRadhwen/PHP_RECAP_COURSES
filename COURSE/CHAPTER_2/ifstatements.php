<?php

    echo "<pre>";

    // if
    // if else
    // if elseif else
    // switch

    // 1- if
    $x = 5;
    if ($x === 5) var_dump(True);

    // 2- if else

    if($x === 4)
        var_dump(true);
    else
        var_dump(false);
    // using ternary operator
    var_dump($x === 4 ? true : false); //return false

    // 3- if elseif else
    if($x == 5)
        var_dump(true);
    elseif($x == 3)
        var_dump(true);
    elseif($x == 2)
        var_dump(true);
    else
        var_dump(false);

    // 4- switch
    $x = 2;
    switch($x){
        case 5:
        case 3:
            var_dump(true);
            break;
        default:
            var_dump(false);
    }

    // Nested if statements
    $h = "hello";
    $w = "world !";
    if($h == "hello") {
        if($w == "world !")
            var_dump("$h $w");
        else
            var_dump(false);
    }
    else
        var_dump(false);


