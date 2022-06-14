<?php
    class Fruit { // class: 멤버 필드와 멤버 메소드로 구성 된 것. like 설계도
        private $name; // 멤버 필드 or property(속성): 메소드 아닌 멤버 변수, 상수
        private $color;
        private $price;
        // public const DD = dd; // 상수는 값 바로 넣어줘야 됨.

        function __construct() { // 생성자 함수 없어도 무방.
            return $this;
        }

        public function print_fruit() { // 멤버 메소드 (여기부터)
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>"; 
            print "Price : {$this->price}<br>";
        }

        public function setName($name) {
            $this->name = $name;
            return $this; //return $this; 존재함: builder pattern이 만들어져 있다는 뜻. 
        }

        public function setColor($color) {
            $this->color = $color;
            return $this;
        }

        public function setPrice($price) { // (여기까지 다.)
            $this->price = $price;
            return $this;
        }
    }

    // 객체 안에 있으면 method, 밖에 있으면 function
    // class에 있는 모든 것들이 이루어졌을 때 만들어 지는 게 객체(object), 인스턴스(instance)(사례, 경우)
    $apple1 = (new Fruit())->setName("Apple"); // new Fruit 뒤에 괄호 빼도 무방.
    $apple1->print_fruit();
    
    $apple2 = (new Fruit()) //builder pattern
                ->setColor("Blue")
                ->setPrice(1000);
    $apple2->print_fruit();

    $banana1 = new Fruit; //호출
    $banana1->setColor("Yellow");
    $banana1->setPrice(2000);
    $banana1->print_fruit();