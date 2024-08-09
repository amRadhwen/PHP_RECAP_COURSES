<?php


    echo "<pre>";
    
    // JSON: js object notation
    // used for storing and exchanging data
    
    // php has multiple buit-in functions to handle JSON
    
    // json_encode()
    
    $age = ["Peter"=>35, "Ben"=>37, "John"=>43];
    $computers = ["Toshiba", "Asus", "Dell", "Acer", "Msi"];
    echo json_encode($age)."\n";
    echo json_encode($computers)."\n";
    
    // json_decode()
    $json_names = '{"Peter":35,"Ben":37,"John":43}';
    $json_computers = '["Toshiba","Asus","Dell","Acer","Msi"]';
    
    var_dump(json_decode($json_names)); // return object
    $names_obj = json_decode($json_names);
    // access
    var_dump($names_obj->Peter);
    // looping
    foreach($names_obj as $name => $age) {
        var_dump("[$name: $age]");â
    }
            
    var_dump(json_decode($json_names, true)); // return associative array
    // access
    $assoc_arr_names = json_decode($json_names, true);
    var_dump($assoc_arr_names["Peter"]);
    var_dump(json_decode($json_computers));
    
    

