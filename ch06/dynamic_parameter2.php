<?php
    /*
    function_num_args() : 인자수 리턴
    function_get_arg () : 인자값 가져올 때 사용
    function_get_args() : 인자를 배열로 받음
    */

    function print_sum()
    {
        print "function_num_args () : " . func_num_args () . "<br>";
        print "function_get_arg (0) : " . func_get_arg (0) . "<br>";
        print "function_get_args (1) : " . func_get_args (1) . "<br>";
        print "-----<br>";
    }

    function sum()
    {
        $sum = 0;
        foreach(func_get_args() as $val)
        {
            $sum += $val;
        }
        return $sum;
    }
    print "sum : " . sum(1, 2) . "<br>";
    print "썸 : " . sum(1, 2, 10, 11, 12, 13, 14) . "<br>";

?>