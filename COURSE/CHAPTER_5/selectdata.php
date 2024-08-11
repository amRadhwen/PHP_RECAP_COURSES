<style type="text/css">
    table {
        border-collapse: collapse;
    }
    table  td, table th{
        border: 1px solid black;
    }
</style>
<?php

    echo "<pre>";
    require_once 'DBhandler.php';
    
    //$con = null;
    $dbconncetion = new DBconnection("localhost", "root", "root", "phpcourse");
    
    if($dbconncetion->connect()) {
        try {
            $stmt = $dbconncetion->getConnection()->prepare("SELECT id, firstname, lastname, email FROM Guests");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            //var_dump($result);
            echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
            foreach($result as $key => $arr) {
                echo "<tr><td>".$arr["id"]."</td><td>".$arr["firstname"]."</td><td>".$arr["lastname"]."</td><td>".$arr["email"]."</td></tr>";
            }
            echo "</table>";
            
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    else 
        echo $dbconncetion->getError();