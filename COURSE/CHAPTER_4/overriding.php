<?php


    echo "<pre>";
    // Overriding inherited methods
    
    class Fruit{
        public $name;
        public $color;
        
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        
        protected function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}.\n";
        }
    }
    
    // Apple is inherited from Fruit
    
    class Apple extends Fruit {
        
        public $weight;
        
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        
        public function intro() {
            echo "The fruit is {$this->name}, the color is {$this->color} and the weight is {$this->weight} gram.\n";
        }
        
        public function message() {
            echo "This is class Apple. \n";
        }
    }
    

    $apple = new Apple("Apple", "red", 100);
    $apple->intro();
     
    // final keyword
    // class declared as final to prevent class inheritance
    // methods declared as final to prevent methods overriding
     
    // final class
    final class Fruitt {
        
         
         
    }
    
    //class Appl extends Fruitt{} // Error final class cannot be inherited
     
    // prevent methods overriding
    class Fruittt {
        public $name;
         
        public function __construct($name) {
            $this->name = $name;
        }
        
        final public function intro() {
            echo "The fruit is {$this->name}.\n";
        }
    }
    
    class Strawberry extends Fruittt {
        
        /*
        public function intro() {
            echo "This is Strawberry.\n";
        }*/ 
        // ERROR cannot override final methods
    }
    
    $strawberry = new Strawberry("Strawberry");
