<?php

    echo "<pre>";
    
    // a way to store informations to be used across multiple pages
    // unlike cookie informations aren't stored on the user computer.
    
    // session_start(); start a session // must be before the html tag
    // session variables are stored in $_SESSION superglobal
    // $_SESSION is undefined unless session_start() is used
    
    // var_dump($_SESSION); // undefined global variable
    
    session_start();
    
    // set session variables
    $_SESSION["favcolor"] = "darkred";
    $_SESSION["favanimal"] = "cat";
    
    var_dump($_SESSION);
    
    // destroy sesion
    // session_unset(); unset session variables
    // session_destroy() destroy the session
    session_unset();
    session_destroy();
    

