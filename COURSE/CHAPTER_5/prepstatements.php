<?php

    echo "<pre>";
    echo "<pre>";
    require_once 'DBhandler.php';
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root", "phpcourse");
    
    if($dbconncetion->connect()) {
        try {
            // prepare sql qnd bind parameters
            $stmt = $dbconncetion->getConnection()->prepare("INSERT INTO Guests (firstname, lastname, email) VALUES(:firstname, :lastname, :email)");
            $stmt->bindParam(":firstname", $firstname);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":email", $email);

            // insert a row
            $firstname = "Johny";
            $lastname = "Deep";
            $email = "johnydeep@gmail.com";
            $stmt->execute();

            // insert a second row
            $firstname = "Josh";
            $lastname = "fox";
            $email = "joshfoxp@gmail.com";
            $stmt->execute();

            // insert a third row
            $firstname = "Alexis";
            $lastname = "Dupan";
            $email = "alexisdupan@gmail.com";
            $stmt->execute();
            echo "New Records Added !";
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
            
    }
    else
        echo $dbconncetion->getError();