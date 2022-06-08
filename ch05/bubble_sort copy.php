<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];

        for($i<count($arr); $i=0; $i++)
        {
            for($z=0; $z<$i; $z++)
            {
                if($arr[$z] < $arr[$z+1])
                {
                    $temp = $arr[$z];
                    $arr[$z] = $arr[$z+1];
                    $arr[$z+1] = $temp;
                }
            }
            print_r($arr);
            print "<br>";
        }
        print "<br>";
        print "<br>";
        print_r($arr);
?>