<?php

    echo "<pre>";
    
    // used for data validation = determine if data is in proper form
    // used for data sanitizing = remove any illegal characters from the data
    
    // php filter extension has many functions needed for checking user input
    // external data resrouce can be
    // user input from a form
    // cookies
    // web services data
    // server variables
    // database query results
    
    // filter_list()
    //var_dump(filter_list());
    //var_dump(filter_id("url"));
    
?>
<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <tr>
        <?php
            foreach(filter_list() as $id => $filter) {
                echo "<tr><td>".$filter."<td><td>". filter_id($filter)."<td></tr>";
            }
        ?>
    </tr>
</table>

<?php

    // filter_var()
    // used for validation and sanitize data
    // filter single variable with specific filter

    // Sanitize a string

    $str = "<h1>Hello World !</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    var_dump($newstr);
    
    //validate integer
    $int = 100;
    var_dump(filter_var($int, FILTER_VALIDATE_INT)); // return false if int is invalid
    
    //validate ip address
    $ip = "41.224.5.0";
    var_dump(filter_var($ip, FILTER_VALIDATE_IP)); // return false if not a valid ip
    
    // sanitize and validate email addr
    $email = "john.smith@gmail.com";
    // remove illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    var_dump($email);
    //validate email
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    
    // 