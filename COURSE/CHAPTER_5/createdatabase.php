<?php

    require_once 'DBconnection.class.php';;
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root");
    $con = $dbconncetion->connect()->getConnection() ?? $dbconncetion->getConnection();
    
    // create database
    echo $dbconncetion->createDB("phpcourse") ? "DB created successfully" : $dbconncetion->getError();
    
    // close connection
    $dbconncetion->closeConnection();
    
    