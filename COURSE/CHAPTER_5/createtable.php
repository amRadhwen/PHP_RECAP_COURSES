<?php
    echo "<pre>";
    require_once 'DBhandler.php';
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root", "phpcourse");
    
    if($dbconncetion->connect()) {
        //create table
        $sql = "CREATE TABLE Guests("
                . "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                ."firstname VARCHAR(30) NOT NULL,"
                ."lastname VARCHAR(30) NOT NULL,"
                ."email VARCHAR(50),"
                ."reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
                . ")";

        echo $dbconncetion->sqlExec($sql) ? "Table successfully created" : $dbconncetion->getError();

        //close connection
        $dbconncetion->closeConnection();
    }
    else
        echo $dbconncetion->closeConnection();
            