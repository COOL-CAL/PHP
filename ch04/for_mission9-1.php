<?php
    $star = rand(3,10);
    print $star . "<br>";
    for($i=0; $i<$star; $i++)
    {
        for($z=0; $z<=$i; $z++)
        {
            print "*";
        }
        print "<br>";
    }

    print "----<br>";

    $sum = "";
    for($j=1; $j<=$star;$j++)
    {
        $sum = $sum . "*";
        print "${sum}<br>";
    }
?>