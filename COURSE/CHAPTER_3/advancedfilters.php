<?php

    echo "<pre>";
    
    //validate integer within a range
    
    $int = 122;
    $min = 1;
    $max = 200;
    var_dump(filter_var($int, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, "max_range"=>$max))));

    //validate ipv6 addr
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
    var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));
    
    //validate url (must contain queryString)
    $url = "http://www.google.com?search=hello%20world%20!";
    var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED));
    
    //remove characters with ASCII value > 127
    $str = "<h1>Hello World !£¤ù§<h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    var_dump($newstr);