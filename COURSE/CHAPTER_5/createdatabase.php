<?php

    require_once 'DBhandler.php';;
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root");
    
    if($dbconncetion->connect()) {
        // create database
        $sql = "CREATE DATABASE phpcourse";
        echo $dbconncetion->sqlExec($sql) ? "DB created successfully" : $dbconncetion->getError();

        // close connection
        $dbconncetion->closeConnection();
    }
    else
        echo $dbconncetion->getError();
    