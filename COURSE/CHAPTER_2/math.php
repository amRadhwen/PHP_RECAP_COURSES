<?php
    echo "<pre>";
    
    // pi()
    var_dump(pi());

    // min(), max()
    var_dump(min(10, 22, 55, 60, 91, 12, 6)); // return min val
    var_dump(max(10, 22, 55, 60, 91, 12, 6)); //return max val

    // abs()
    var_dump(abs(-6.7)); // return absolute positive val

    // sqrt()
    var_dump(sqrt(25)); //return the square

    // round()
    var_dump(round(6.5)); //return round of floating number

    // rand()
    var_dump(rand()); //return random number
    var_dump(rand(1, 100)); //return random number between 1 and 100
