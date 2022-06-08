<?php
    $star = rand(3, 10);

    print_star($star);
    print "star = $star <br>";
    
    function print_star($star)
    {   
        for($i=0; $i<$star; $i++)
        {
            print "*";
        }
    }

    print_star_line($star);

    function print_star_line($star)
    {   
        
        for($j=0; $j<$star; $j++)
        {
            for($i=0; $i<$star; $i++)
            {
                print "*";
            }
            print "<br>";
        }
    }

    print_star_triangle($star);

    function print_star_triangle($star)
    {
        
        for($i=1; $i<=$star; $i++)
        {
            print_star($i);
            print "<br>";
        }
    }
?>