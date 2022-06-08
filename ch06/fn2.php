<?php
    $num = rand(1, 10);

    function print_odd_even($num)
    {
        if($num % 2 == 0)
        {
            print "숫자 ${num}(는)은 짝수입니다.";
        }
        else
        {
            print "숫자 ${num}(는)은 홀수입니다.";
        }
    }

    print_odd_even($num);
?>