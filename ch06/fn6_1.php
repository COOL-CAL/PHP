<?php
    $star = rand(3, 10);

    print_star_line($star);

    function print_star_line($star)
    {   
        print "star = $star <br>";
        for($j=0; $j<$star; $j++)
        {
            for($i=0; $i<$star; $i++)
            {
                print "*";
            }
            print "<br>";
        }
    }
?>