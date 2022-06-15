1번
<br>
<?php
    for($d=9; $d > 1; $d--)
    {
        if ($d<9){print "---------------<br>";}
        for($i=9; $i > 0; $i--)
        {   
            print "${d} × ${i} = " .$d*$i. "<br>";
        }
    }
?>