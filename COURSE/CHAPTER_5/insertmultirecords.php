<?php

    echo "<pre>";
    require_once 'DBhandler.php';
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root", "phpcourse");
    
    if($dbconncetion->connect()) {
        $sql1 = "INSERT INTO Guests(firstname, lastname, email) VALUES ('John', 'Doe', 'johndoe@gmail.com')";
        $sql2 = "INSERT INTO Guests(firstname, lastname, email) VALUES ('Jack', 'Smith', 'jacksmith@gmail.com')";
        $sql3 = "INSERT INTO Guests(firstname, lastname, email) VALUES ('Alex', 'Moe', 'alexmoe@gmail.com')";
        $sql_arr = [$sql1, $sql2, $sql3];
        echo $dbconncetion->sqlInsertMany($sql_arr) ? "Records inserted successfully" : $dbconncetion->getError();
        
    }
    else
        echo $dbconncetion->getError();

