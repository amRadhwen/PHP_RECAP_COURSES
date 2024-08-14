<?php
    $path = $_SERVER["REQUEST_URI"];
    $httpHost = $_SERVER["HTTP_HOST"];
    
    function redirect($path) {
        global $httpHost;
        header("Location:http://".$httpHost."/".$path);
        die();
    }
    redirect("index.php");
?>