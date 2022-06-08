<?php
    $star = rand(3, 10);

    print_star($star);

    function print_star($star)
    {   
        print "star = $star <br>";
        for($i=0; $i<$star; $i++)
        {
            print "*";
        }
    }
?>