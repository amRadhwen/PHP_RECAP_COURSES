<?php

    echo "<pre>";
    require_once 'DBhandler.php';
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root", "phpcourse");
    
    if($dbconncetion->connect()) {
        // insert data into guests table
        $sql = "INSERT INTO Guests(firstname, lastname, email) VALUES ('John', 'Doe', 'johndoe@gmail.com')";
        echo $dbconncetion->sqlExec($sql) ? "Data successfully added :)" : $dbconncetion->getError();
        //get last inserted column id
        echo "\n".$dbconncetion->getConnection()->lastInsertId();
    }
    else
        echo $dbconncetion->getError();

