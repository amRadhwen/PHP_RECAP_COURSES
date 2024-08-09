<?php
    
    echo "<pre>";
    session_start();
    var_dump($_SESSION);
    
    session_unset();
    session_destroy();