<?php

    echo "<pre>";
    
    // php regex functions
    // preg_match(); return 1 if pattern was found in the strign else return 0
    // preg_match_all(); return the number of times the pattern wasa found in the string
    // reg_replace(); return a new string where matched pattern have been replaced with another string
    
    
    // 1- preg_match()
    $str = "Visit W3Schools";
    $pattern = "/w3schools/i"; // i makes the search case_insensitive
    echo preg_match($pattern, $str)."\n"; // return 1
    echo preg_match("/w3schools/", $str)."\n"; // return 0
    
    // 2- preg_match_all()
    $str1 = "Hello world!, this is a simple piece of code :)";
    $patt = "/is/i";
    echo preg_match_all($patt, $str1)."\n"; // return 2
    echo preg_match_all("/IS/", $str1)."\n"; // return 0
    
    // 3- preg_replace()
    $str2 = "Hello world !";
    $patt2 = "/hello/i";
    echo preg_replace($patt2, "Hi", $str2)."\n";
    

