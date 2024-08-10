<?php


    echo "<pre>";
    
    // any value wich can be looped through using foreach() loop
    // introduced in php 7.1 and can be used as data type for function args and return values
    
    // iterable keyword
    
    function handleIterable(iterable $iterable) {
        foreach($iterable as $item) {
            echo $item."\n";
        }
    }
    
    $arr = ["a", "b", "c"];
    handleIterable($arr);

    // as function return type
    
    function getIterable():iterable {
        return ["a","b","c"];
    }
    
    foreach (getIterable() as $item) {
        echo $item."\n";
    }
    
    
    // creating iterables
    // Arrays are iterable and can be used as arguments of function that requires an iterable
    // iterators
    // any object that implements the Iterator interface can be used as an argument of a function
    // that requires an iterable
    
    // iterator contains a list of items and provides methods to loop through them;
    // it keeps a pointer to one of the elements in the list
    // each item in the list should have a key wich can be used to find the item
    // iterator must have these methods
    // current() return the element that the pointer is currently pointing to, it can be any data type
    // key() returns the key associated with the current element in the list it can only be an integer/float/bool/string
    // next()  move the pointer to the next element in the list
    // rewind() move the pointer to the first element in the list
    // valid() if the internal pointer is not pointing to any element (example if next() is called at the end of the list)
    // this should return false, it returns true in any other case
    
    // Example
    class MyIterator implements Iterator {
        private $items = [];
        private $pointer = 0;
        
        public function __construct($items) {
            $this->items = array_values($items); // array_values() check if keys are numbers
        }
        
        public function current() {
            return $this->items[$this->pointer];
        }
        
        public function key() {
            return $this->pointer;
        }
        
        public function next() {
            $this->pointer++;
        }
        
        public function rewind() {
            $this->pointer = 0;
        }
        
        public function valid() {
            return $this->pointer < count($this->items);
        }
    }
    
    // application
    $iter = new MyIterator(["a", "b", "c"]);
    handleIterable($iter);