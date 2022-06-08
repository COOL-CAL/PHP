<?php
    $n1 = 9;
    $n2 = 5;

    //void함수: 값이 return되지 않는 함수 (끝났으면 좋겠다 하는 부분에 return; 작성)
    //비void함수 = return함수 (ex return $result;)

    function print_sum($n1, $n2)
    {
        $result = $n1 + $n2;
        print "$n1 + $n2 = $result <br>";
    }
    function print_minus($n1, $n2)
    {
        $result = $n1 - $n2;
        print "$n1 - $n2 = $result <br>";
    }
    function print_multi($n1, $n2)
    {
        $result = $n1 * $n2;
        print "$n1 * $n2 = $result <br>";
    }
    function print_div($n1, $n2)
    {
        $result = $n1 / $n2;
        print "$n1 / $n2 = $result <br>";
    }
    function print_mod($n1, $n2)
    {
        $result = $n1 % $n2;
        print "$n1 % $n2 = $result <br>";
    }
    print_sum($n1, $n2);
    print_minus($n1, $n2);
    print_multi($n1, $n2);
    print_div($n1, $n2);
    print_mod($n1, $n2);
?>