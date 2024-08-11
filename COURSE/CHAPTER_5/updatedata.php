<?php

    echo "<pre>";
    require_once 'DBhandler.php';
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root", "phpcourse");
    
    if($dbconncetion->connect()) {
        try{
            $sql = "UPDATE Guests SET lastname='IRMA' WHERE id=18";
            $stmt = $dbconncetion->getConnection()->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount()." record updated successfully !";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    else
        echo $dbconncetion->getError();
    
    $dbconncetion->closeConnection();