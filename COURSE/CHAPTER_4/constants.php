<?php

    echo "<pre>";
    // class constants
    // constantas defined within class
    // declared using const keyword // cant use define in class scope
    // case-sensitive
    // recommended to name constants in all uppercase
    // if it's declared public it can be accessible from outside the class
    // accessible from outside the class using class name followed by resolution operator :: followed by const name
    // accessible from inside the class using self::constname
    
    class Goodbye {
        public const PI = 3.14;
    
        // access
        public function message() {
            var_dump(self::PI);
        }
    }
    
    $gb = new Goodbye();
    $gb->message();
    
    
    // access from outside the class
    var_dump(Goodbye::PI);
    
    
    
    
