7번
<br>
<?php
    $star = 0;
       for($i=1;$i<=$star;$i++)
       {
           for($j=0;$j<=$star;$j++)
           {
               if($j<$i){
                   print "*";
               }
           }
       }
       for($z=$star;$z;$z--)
       {
           for($y=$star--;$y;$y--)
           {
               print "*";
           }
           print "<br>";
       }     
?>