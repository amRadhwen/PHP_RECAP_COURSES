<?php
    echo "<pre>";
    $world = "World !";
    $dq = "Hello World !, This is a string data type variable !";
    $sq = 'Hello World !, This is a string data type variable !';
    // Difference between single and double quote string
    // double quote perform action on special characters
    $hw = "Hello $world";
    var_dump($hw);
    $hw2 = 'Hello $world !';
    var_dump($hw2);
    $hw3 = 'Hello '.$world;
    var_dump($hw3);

    // String function
    // There is a lot of string function 
    // can be found on official php website
    //Examples

    // 1- strlen(); //return string length
    var_dump(strlen($dq));
    var_dump(strlen($hw));

    // 2- str_word_count(); return number of words in a string
    var_dump(str_word_count($sq));
    var_dump(str_word_count($hw2));
    
    // 3- str_pos(); truen position of string
    var_dump(strpos($dq, "This"));
    var_dump(strpos($hw, "World"));
    
    // 4- strtoupper(); return uppercase string
    // 5- strtolower(); return lowercase string
    $str1 = "hello world !";
    $str2 = "HELLO WORLD !";
    var_dump(strtoupper($str1));
    var_dump(strtolower($str2));

    // 6- str_replace(); return string replaced with new one
    var_dump(str_replace("World", "Tunisia", $hw));

    // 7- strrev(); return reversed string
    var_dump(strrev($hw));

    // 8- trim(); return stringn without white spaces from the beginning and the end;
    $strr = " Hello World ! ";
    var_dump(trim($strr));

    // 9- explode(); return array of strings using separator specifies where to split the string
    var_dump(explode(" ", $dq));

    // 10- substr(); return portion of string
    $hw = "Hello World !";
    var_dump(substr($hw, 6, 5)); // return string "World" from "Hello World !";
    var_dump(substr($hw, -7, 5)); // return String "World" from "Hello World" starting from the end.
    var_dump(substr($hw, 0, -8)); //return string in between position 0 and -8

    // 11- Escaping characters
    // single quote \'
    echo '\'';
    // double quote \"
    echo "\"";
    // new line \n
    echo "\na\nb\n";
    // carriage return \r
    echo "c\rd\r";
    // tab \t
    echo "a\tb";

