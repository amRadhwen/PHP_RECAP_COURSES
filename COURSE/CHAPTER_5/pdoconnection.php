<?php

    echo "<pre>";
    $servername = "localhost";
    $username = "root";
    $password = "root";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password); // database myDB must be created before connection
        // set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected :)";
    } catch (PDOException $e) {
        echo "Connection failed: ".$e->getMessage();
    }
    
    //close the connection
    $conn = null;

