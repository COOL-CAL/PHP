<?php
    $snum = 5;
    $enum = 10;
    print_num_from_to($snum, $enum);

    function print_num_from_to($s, $e)
    {   
        print "[";
        if($s<$e)
        {
            for($i=$s; $i<=$e; $i++)
            {
                if($i != $s) { print ", ";}
                print $i;
            }
        }
        else
        {
            for($i=$s; $i>=$e; $i--)
            {
                if($i>$e)
                {
                    print $i. ", ";
                }
                else
                {
                    print $i;
                }
            }
        }
        print "]";
    }
?>