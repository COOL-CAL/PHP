<?php

    class Animal {
        function crying() {
            print "Animals roar. <br>";
        }
    }

    class Dog extends Animal {
        function crying() {
            print "Dog roars bow wow. <br>";
        }
        function grandFatherCrying() {
            parent::crying();
        }
    }

    class BorderCollie extends Dog {
        function crying() {
            parent::grandFatherCrying();
            print "Border Collie roars woof woof. <br>";
        }
    }

    class Cat extends Animal {
        function crying() {
            print "Cat roars mew. <br>";
        }
    }

    class Human {
        function speak() {
            print "Human speak. <br>";
        }
    }

    function beCry($ani) {
        if(method_exists($ani, "crying")) {
            $ani->crying();
        } else {
            print "method crying doesn't exist. <br>";
        }
    }

    beCry(new BorderCollie);
    beCry(new Cat);
    beCry(new Dog);
    beCry(new Animal);
    beCry(new Human);


