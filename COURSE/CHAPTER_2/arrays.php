<?php

    echo "<pre>";
    
    // PHP Arrays Types
    // 
    // indexed arrays
    // Associative arrays
    // multidimentional array
    
    // operation on array
    // create arrays, access arrays, update arrays, add arrays items, remove arrays items, sort arrays
    
    // Array items
    // most commun string and numbers 
    // can be objects, functions or even arrays
    // array can contain different data types
    
    // Array functions
    // there are multiple built-in array function
    
    // 1- Indexed arrays
    //each array has an index number starting from 0
    $nums = ["one", "two", "three", "four", "five"]; // can use array()
    var_dump($nums);
    
    // change array value
    $nums[1] = "2"; //change second array item to "2"
    var_dump($nums);
    
    // loop through indexed array
    // can use any loop method
    // most commun is for and foreach
    foreach($nums as $num){
        var_dump($num);
    }
    
    
    // 2- Associative array
    // array that use named keys
    $numbers = array("one"=>1, "two"=>2, "three"=>3);
    
    // Access items
    var_dump($numbers["two"]);
    
    // change value
    $numbers["two"] = 2;
    var_dump($numbers);
    
    // loop
    foreach($numbers as $number => $nmbr){
        var_dump($number, $nmbr);
        
    }

    // array can contain function
    // function name must be string type
    function sayHi(){ 
        var_dump("Hi !");
    }
    
    $arr = [1, 2, "sayHi", 3, 4];
    var_dump($arr);
    // access function
    $arr[2]();
    
    // upgrade array items
    $arr1 = [1, 2, 3, 4, 5];
    $arr1[2] = "Three";
    var_dump($arr1);
    
    // set array items to the same value
    foreach($arr1 as $ar) {
        $ar = "ONE";
    }
    var_dump($ar); // $ar remains as reference to the last array item
    // solution
    unset($ar);
    //var_dump($ar); // undefined variable error raised
    var_dump($arr1);
    
    
    // Add array items
    $numberss = ["one", "two", "three"];
    $colors = ["red"=>"FF0000", "green"=>"00FF00"];
    $numberss[] = "Four";
    var_dump($numberss);
    $colors["blue"] = "0000FF";
    var_dump($colors);
    
    // using array_push()
    array_push($numberss, "Five", "Six"); // return array length after push 
    var_dump($numberss);
    
    // add multiple items
    $colors += ["Black"=>"FFFFFF", "White"=>"000000"]; //only with associative arrays
    var_dump($colors);
    
    // Delete array items
    // array_splice()
    var_dump(array_splice($numberss, 2, 3)); // remove 3 items from position 2 and return and array of removed items
    var_dump($numbers);
    
    //using unset()
    unset($colors["White"]);
    var_dump($colors);
    
    // array_pop() remove last array item
    array_pop($colors); // return removed item
    var_dump($colors);
    
    // array_shift() remove first item
    array_shift($colors);
    var_dump($colors);
    
    // PHP Array Sorting
    // sort() sort in ascending order
    // rsort() sort in descending order
    // 
    // asort() sort in asc order according to values
    // ksort() sort in asc order according to keys
    // 
    // arsort() sort in desc order according to values
    // krsort() sort in desc order according to keys
    $names = array("john", "jack", "sophie", "frank");
    $nums = [5, 4, 9, 3, 8, 2, 1, 7, 9];
    $cars = array("BMW"=>"Black", "Mercedes"=>"Grey", "Porche"=>"White");
    
    sort($names);
    sort($nums);
    
    var_dump($names);    
    var_dump($nums);
    
    asort($cars);
    var_dump($cars);
    ksort($cars);
    var_dump($cars);
    
    // 3- Multidimensional array
    // means Nested arrays
    
    $computers = array(
        array("Toshiba", 22, 18),
        array("Dell", 15, 13),
        array("Acer", 5, 2),
        array("Asus", 17, 15)
    );
    
    // Accessing
    function stockStat($computers) {
        foreach($computers as $computer) {
            for($c = 0; $c < count($computer); $c++) {
                echo "[MODEL: ".$computer[$c].", INSTOCK: ".$computer[$c+1].", SOLD: ".$computer[$c+1]."]\n";
                $c = 3; // to break the loop
            }
        }
    }
    
    stockStat($computers);


