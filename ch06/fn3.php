<?php
    $start_num = 1;
    $end_num = 1000;
    $result = sum_from_to($start_num, $end_num);

    function sum_from_to($num1, $num2)
    {   
        $result = 0;
        for ($i=$num1; $i<=$num2; $i++)
        {
            $result += $i;
        }
        return $result;
    }

    print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result <br>";
?>