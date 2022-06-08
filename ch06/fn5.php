<?php
    $snum = 4;
    $enum = 1;
    print_num_from_to($snum, $enum);

    function print_num_from_to($s, $e)
    {   
        print "[";
        if($s<=$e)
        {
            for($i=$s; $i<=$e; $i++)
            {
                if($i<$e)
                {
                    print $i. ", ";
                }
                else
                {
                    print $i;
                }
            }
        }
        else
        {
            print "종료값이 더 작을 수 없습니다.";
        }
        print "]";
    }
?>