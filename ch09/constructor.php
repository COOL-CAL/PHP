<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        function __construct($name=null, $color=null, $price=null) { //setter 없이 값을 넣을 때: 값을 수정 불가.
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        public function print_fruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>"; 
            print "Price : {$this->price}<br>";
        }
    }

    $apple = new Fruit("Apple", "red", 1000);
    $banana = new Fruit("Banana", "yellow", 500);

    $apple->print_fruit();
    $banana->print_fruit();