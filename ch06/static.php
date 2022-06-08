<?php
    function inc()
    {
        static $i = 1;
        print $i . "<br>";
        $i += 1;
    }

    $z = 1;
    function inc2()
    {
        global $z; //함수 안에서 전역변수 사용할 때 global 사용
        print $z . "<br>";
        $z += 1;
    }
    
    for($i=0; $i<10; $i++)
    {
        inc();
    }
?>