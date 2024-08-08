<?php

    echo "<pre>";
    
    // date() formats a timestamp to more readable date and time
    // get a date
    // d - day of the month (dd)
    // m - month (mm)
    // Y - year (yyyy)
    // l - day of the week (01-07)
    
    // H - 24-hour format (00-23)
    // h - 12-hour format (01-12)
    // i - minutes (00-59)
    // s - seconds (00-59)
    // a - ante meridiem and post meridiem (am-pm)
    
    // Get a date
    echo "&copy; 2010-".date("Y")."\n";
    echo date("Y-m-d")."\n";
    
    // Get a time
    echo date("h:i a")."\n";
    
    // mktime()  return Unix timestamp for a date starting from 01/01/1970
    // strtotime return time from a string
    
    // mktime
    $t = mktime(11, 14, 54, 8, 12, 2015);
    echo "Created Date: ".date("Y-m-d h:i:sa", $t)."\n";
    
    //strtotime
    $tt = strtotime("10:30pm April 15 2014");
    echo "Created Date: ".date("Y-m-d h:i:sa", $tt)."\n";
    
    var_dump(date("Y-m-d", strtotime("tomorrow")))."\n";
    var_dump(date("Y-m-d", strtotime("next saturday")))."\n";
    var_dump(date("Y-m-d", strtotime("+3 months")))."\n";
