<?php


    echo "<pre>";
    
    // $GLOBALS
    // $_SERVER
    // $_REQUEST
    // $_POST
    // $_GET
    // $_FILES
    // $_ENV
    // $_COOKIE
    // $_SESSION
    
    // 1- $GLOBLAS  
    // array of global variables
    $x = 5;
    var_dump($GLOBALS);
    function changeX(){
        // $x = 6; // $x is inacessible in local scope
        // global $x; // acces it using global keyword
        // o  using $GLOBALS array containing all global variables
        $GLOBALS["x"] = 6;
    }
    
    changeX();
    var_dump($x);
    
    // declaring variables using $GLOBALS
    // $GLOBALS["y"] = 55;
    // var_dump($GLOBALS);
    // var_dump($y);
    
    
    // 2- $_SERVER
    // hold informations about headers, path, script location ...etc
    // var_dump($_SERVER);
    
    
    // 3- $_REQUEST
    // holds informations about submitted form data, cookie data ...etc
    // in other words $_REQUEST is an array containing data from $_GET, $_POST, $_COOKIE
    var_dump($_REQUEST);
    
    // 4- $_POST
    // hold variables received via HTTP Post method
    var_dump($_POST);
    
    // 5- $_GET
    // hold variables received via HTTP Get method
    var_dump($_GET);
    
    

