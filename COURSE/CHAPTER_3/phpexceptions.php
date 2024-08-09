<?php

    echo "<pre>";
    
    // Exception: object that describes an error or unexcpected behaviour of php script
    // throwing an exception
    // throw statement
    /*
    $dividend = 12;
    $divisor = 0;
    if($divisor == 0 ) {
        throw new Exception("Division by zero"); // an error is raised with the set exception message
    }
    else var_dump($dividend/$divisor);
    */
    // try...catch statement
    // avoid errors
    
    function divide($dividend, $divisor) {
        if($divisor == 0)
            throw new Exception("Division by zero");
        else
            return $dividend / $divisor;
    }
    /*
    try {
        var_dump(divide(5, 0));
    } catch (Exception $ex) {
        var_dump("Unable to divide !");
    }*/
    
    // try...catch...finally
    // finally code block will be always executed whether an exception was caught.
    // in this case catch is optional
    /*
    try {
        var_dump(divide(5, 0));
    } catch (Exception $ex) {
        var_dump("Unable to divide !");
    }
    finally {
        var_dump("Process complete.");
    }*/
    
    //can be
    /*
    try {
        var_dump(divide(5, 2));
    } 
    finally{
        var_dump("Process complete .");
    }
    */
    // Exception object
    // contains informations about the error
    
    
    // synthax
    // new Exception(message, code, previous)
    
    // methods
    // getMessage(); getPrevious(); getCode(); getFile(); getLine()
    
    try {
        var_dump(divide(5, 0));
    } catch (Exception $e) {
        var_dump($e->getCode());
        var_dump($e->getMessage());
        var_dump($e->getFile());
        var_dump($e->getLine());
    }