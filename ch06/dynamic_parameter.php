<?php

    function print_sum(...$vals)
    {
        $sum = 0;
        for($i=0; $i<count($vals); $i++)
        {
            $sum += $vals[$i];
        }
        print "sum : " . $sum . "<br>";
    }

    print_sum(1,2);        // sum: 3
    print_sum(1, 2, 3);    // sum: 6
    print_sum(1, 2, 3, 4); // sum: 10
 
    

    //쌤 풀이
    /*
    function print_sum(...$vals)
    {
        $sum = 0;
        foreach($vals as $val)
        {
            $sum +=$val;
        }
        print "sum : $sum <br>";
    }

    print_sum(1,2);        // sum: 3
    print_sum(1, 2, 3);    // sum: 6
    print_sum(1, 2, 3, 4); // sum: 10
    */

?>