<?php
    
    require_once 'DBconnection.class.php';;
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root");
    $con = $dbconncetion->connect()->getConnection() ?? $dbconncetion->getConnection();
