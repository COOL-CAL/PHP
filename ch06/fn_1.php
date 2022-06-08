<?php
    function sum($n1, $n2) {
        return $n1 + $n2;
    }

    function void_sum($n1, $n2) {
        print "sum : " . $n1 + $n2 . "<br>";
    }

    $n1 = 10;
    $n2 = 20;

    void_sum($n1, $n2);
    //그 다음 작업이 필요 없을 때 void함수 씀.

    $result = sum($n1, $n2);
    print "sum * 2  : " . ($result * 2) . "<br>";