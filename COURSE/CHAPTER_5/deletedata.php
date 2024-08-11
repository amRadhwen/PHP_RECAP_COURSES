<?php

    echo "<pre>";
    require_once 'DBhandler.php';
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root", "phpcourse");
    
    if($dbconncetion->connect()) {
        try{
            $sql = "DELETE FROM Guests WHERE id=200";
            $dbconncetion->sqlExec($sql);
            echo "Record deleted !";
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    else
        echo $dbconncetion->getError();
    
    $dbconncetion->closeConnection();

