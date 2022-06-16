<?php
    class Calc {
        function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    $c = new Calc; //객체화
    print "result : {$c->sum(5, 10)} <br>";

    //solve.
    // $c = new Calc();
    // $result = $c->sum(5, 10);
    // print "result : {$result}";

    class StaticCalc {
        static function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    $result = StaticCalc::sum(10, 11);
    print "result : {$result} <br>";