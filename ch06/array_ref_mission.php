<?php
    $arr = [10, 20, 30, 40, 50];
    $num = 5;

    plus_array($arr, 10);
    print_r($arr);

    function plus_array(&$arr, $val)
    {
        /*
        foreach($arr as $i => $j)
        {
            $arr[$i] = $j + $val;
        }
        */
        for($i=10; $i<=10; $i)
        {
            print $arr[$i] = $arr + $val;
        }
        return $val;
    }
?>