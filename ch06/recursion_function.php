<?php
    // 재귀함수
    // 내가 함수라면 내가 나를 호출하는 것.

    $num = 5;
    $result = factorial($num); // 3 x 2 x 1
    print "${num}! = $result <br>";

    function factorial($num)
    {
        $n = 1;
        for($i=$num; $i>0; $i--)
        {
            $n *= $i; 
        }
        return $n;
    }

    /*
    쌤 풀이

    function factorial($num)
    {
        $result = 1;
        for($i=2; $i<=$num; $i++)
        {
            $result *= $i;
        }
        return $result;
    }
    */

    //재귀함수

    function factorial_rec($num)
    {
        if($num === 1) { return 1; }
        return $num * factorial_rec($num - 1);
    }
    
    //절대값 만들기

    function my_abs($val)
    {
        /*
        if($val<0)
        {
            return -$val;
        }
        return $val;
        */
        return $val < 0 ? -$val : $val; //삼항식
    }

    print "my_abs(3) : " . my_abs(3) . "<br>";
    print "my_abs(-3) : " . my_abs(-3) . "<br>";
    
    $num = 3;
    $result = factorial_rec($num); // 3 x 2 x 1
    print "${num}! = $result <br>";
 

    /*
    function my_abs($val)
    {
        return 1;
        $val= 3;
        echo 'my_abs($val) : '.my_abs($val).'<br>';
    }
    */
?>