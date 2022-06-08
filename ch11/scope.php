<?php
    function A()
    {
        /*
        global을 사용함으로써 전역변수(함수 밖의 $n)와
        같은 공간을 쓰게 됨
        함수 안에서 변수는 global을 안 붙여주면 무조건 지역변수
        */
        global $n;
        $n = "A";
        $m = "A";
        print "2: $n, $m<br>";
    }

    $n = "M";
    $m = "M";

    print "1: $n, $m<br>";
    A();
    print "3: $n, $m<br>";
?>