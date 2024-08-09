<?php
    
    echo "<pre>";
    // often used to identify user
    // small file that server embeds on user computer
    // cookies are stored in $_COOKIE superglobal
    // must appear before html tag
    
    // setcookie() // create cookie
    // synthax
    // setcookie(name , value, expire, path, domain, secure, httponly)
    
    $cname = "user";
    $cval = "John smith";
    setcookie($cname, $cval, time()+(86400 /*one day*/ * 30)/* expires after 30 days*/, "/");
    
    if(isset($_COOKIE[$cname])) {
        echo "Cookie ".$cname." is set !\n";
        echo "Cookie $cname value is : $_COOKIE[$cname] !\n";
    }
    else {
        echo "Cookie $cname is not set !\n";
    }
    
    // modify cookie value
    $cnval = "Alex Doe";
    setcookie($cname, $cnval);
    var_dump(isset($_COOKIE[$cnval]));
    
    //delete cookie
    //set cookie expire date to a past time value
    setcookie($cname, "", time()-3600);
    var_dump(isset($_COOKIE[$cname]));
    
    // check if cookie are enabled
    var_dump($_COOKIE); // by default php8 set a sessionID cookie on the server
    setcookie("user", "Irma", time()+3600, "/");
    var_dump(isset($_COOKIE["user"]));

