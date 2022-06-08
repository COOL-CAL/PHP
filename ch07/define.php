<?php
    define("NAME", "홍길동");
    define("NAME2", "장보고");
    define("STAND_AGE", 25);

    //상수 const vs 리터럴 literal

    print NAME;
    print NAME2;
    print STAND_AGE;
    print "------------<br>";
    
    function fn1() {
        print "fn1 : " . NAME . "<br>";
    }

    function fn2() {
        define("TEST", "테스트");
    }

    fn1();
    fn2();
    print TEST . "<br>";