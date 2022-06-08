<?php

    $num = rand(1, 10);

    print_odd_even($num);

    function print_odd_even($num)
    {
        $odd_even = "홀";
        if($num % 2 == 0)
        {
            $odd_even = "짝";
        }
        print "숫자 ${num}(는)은 ${odd_even}수입니다.";
    }
?>


