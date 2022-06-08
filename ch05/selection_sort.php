<?php
        $arr = [10, 33, 12, 8, 1, 89, 11];

        for($i=0; $i<count($arr)-1; $i++)
        {
            $idx = $i;
            for($z=$i+1; $z<count($arr); $z++)
            {
                if($arr[$idx] > $arr[$z])
                {
                    $idx = $z;
                }
            }

            if ($idx != $i)
            {
                $temp = $arr[$idx];
                $arr[$idx] = $arr[$i];
                $arr[$i] = $temp;
            }
        }

  
        print "<br>";
        print "<br>";
        print_r($arr);
?>