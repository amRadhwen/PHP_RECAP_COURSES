<?php

    echo "<pre>";
    
    // php 5 and later can work with MySQL using
    // MySQLi extension (i stands for improved)
    // PDO (PHP Data Object)
    
    // Example using MySQLi
    $servername = "localhost";
    $username = "root";
    $password = "root";
    
    //create connection
    $con = new mysqli($servername, $username, $password);
    
    //check connection
    if($con->connect_error) {
        die("Connection failed: ".$con->connect_error);
    }
    echo "Connected :)";
    

    
