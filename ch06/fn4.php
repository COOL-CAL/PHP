<?php

    /*
    $dan = rand(2, 9);

    print_gugudan($dan);
    function print_gugudan($dan)
        {
            for($i=1; $i<10; $i++)
            {
                print "$dan x $i =" . ($dan * $i) . "<br>";
            }
        }
    */
   
    print_gugudan_from_to(2, 6);
    function print_gugudan_from_to($n1, $n2)
    {   
        for($i=$n1; $i<=$n2; $i++)
        {
            for($j=1; $j<10; $j++)
            {   
                $result = $i*$j;
                print "$i x $j =" . $result . "<br>";
            }
            print "<br>";
        }
        return $result;
    }

?>