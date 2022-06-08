<?php
    $snum = 4;
    $enum = 1;
    print_num_from_to($snum, $enum);

    function print_num_from_to($s, $e)
    {
        if($e<$s)
        {
            print "<div>종료값이 더 작을 수 없습니다.</div>";
            return;
        }

        print "[";
        for($i=$s; $i<=$e; $i++)
        {
            if($i>$s)
            {
                print ", ";
            }
            print $i;
        }
        print "]";
    }
?>