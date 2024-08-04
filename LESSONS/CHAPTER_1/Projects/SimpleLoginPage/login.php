<?php

    $err_msg = "";
    $succ_msg = "Successfully logedIn :)";

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(strlen($username) && strlen($password)) {
            if($username = "phpcourses" && $password = "123456") {
                header("Location: http://localhost:8080/index.php?succ_msg=$succ_msg");
            }
        }
        else{
            $err_msg = "Please fill in all fields !";
            header("Location: http://localhost:8080/index.php?err_msg=$err_msg");
        }
    } 
    else{
        $err_msg = "Please fill in all fields !";
        header("Location: http://localhost:8080/index.php?err_msg=$err_msg");
    }
        