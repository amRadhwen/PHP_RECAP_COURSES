<?php

    echo "<pre>";
    require_once 'DBhandler.php';
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root", "phpcourse");
    
    if($dbconncetion->connect()) {
        try {
            $stmt = $dbconncetion->getConnection()->prepare("SELECT id, firstname, lastname, email FROM Guests");
            var_dump($stmt->execute());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    else 
        echo $dbconncetion->getError();