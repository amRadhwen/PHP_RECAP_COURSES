<?php
    echo "<pre>";
    // PHP Loops
    // while
    // do while
    // for
    // foreach

    // 1- while
    // while loop is used when you don't knwo how many times the script should run.
    $c = 0;
    while($c < 6){
        var_dump($c);
        $c++;
    }
    echo "\n";
    // forgeting to increment the counter "$c" cause an infinite loop 
    // break statement
    $d = 0;
    while($d < 10){
        if($d == 5) break;
        var_dump($d);
        $d++;
    }
    echo "\n";
    //continue statement
    $e = 0;
    while($e < 5){
        $e++;
        if($e == 3) continue;
        var_dump($e);
    }
    echo "\n";
    // endwhile
    $i = 1;
    while($i < 5):
        var_dump($i);
        $i++;
    endwhile;
    echo "\n";
    // do...while
    $z = 1;
    do {
        var_dump($z);
        $z++;
    }
    while($z < 5);
    echo "\n";

    // do...while executes the code one time if while loop return false from the beginning
    $i = 6;
    do {
        var_dump($i);
        $i++;
    }
    while($i < 5);
    var_dump($i); // $i is also incremented;
    
    
    // 2-for loop
    // for loop is ued when you don't know how many times the script should run.
    
    for($counter = 0; $counter <10; $counter++)
        var_dump($counter);
    
    echo "\n";
    // break/continue
    for($counter = 1; $counter <11; $counter++){
        if($counter == 5) continue;
        if($counter == 8) break;
        var_dump($counter);
    }
    
    echo "\n";
    // 3- foreach loop
    // most commun uses is to loop through items of an array
    $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach($nums as $num) {
        var_dump($num);
    }
    
    echo "\n";
    // indexed/associative arrays
    $colors = [1=> "red", 2=> "green", 3=>"blue", 4=>"purple"];
    foreach($colors as $index=>$color)
        var_dump("$index: $color");
    
    // foreach can loop also through an object
    // alternative synthax
    // like while():....endwhile;
    // foreach():.......endforeach;