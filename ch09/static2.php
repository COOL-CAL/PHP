<?php
    class Computer {
        public static $brand;
        public $price;

        function setBrand() {
            
        }
        
        function myPrint() {
            print "The brand of Computer is " . self::$brand . ", " . "the Price is " . $this->price . "\\. <br>";
        }

        static function myStaticPrint() { //static: 메모리에 올라가야 쓸 수 있음, but price는 not static. -> error.
            //파라미터로 들어온 값들만 사용하면 static이 훨씬 나음
            //객체마다 다른 값을 가졌으면 할 때는 사용 하면 안됨.
            print "The brand of Computer is " . self::$brand . ", " . "the Price is " . $this->price . "\\. <br>";
        }
    }

    Computer::$brand = "LG";
    $c = new Computer;
    $c->price = 10000;

    $c2 = new Computer;
    $c2->price = 20000;

    $c->myPrint();
    $c2->myPrint();

