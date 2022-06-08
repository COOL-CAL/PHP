<?php
   
   $scores = array(
        //국, 영, 수
        array(100, 100, 100), //영자
        array(90, 80, 70), //순자
        array(55, 65, 75), //영철
   );

   $names = array("영수", "순자", "영철");
   $each_sum = array(0, 0, 0);

   for($i=0; $i<count($scores); $i++)
   {
       for($z=0; $z<count($scores[$i]); $z++)
       {
            $each_sum[$i] += $scores[$i][$z];
       }
   }

   for($i=0; $i<count($names); $i++)
   {
       print $names[$i] . " : " . $each_sum[$i] . "<br>";
   }
?>




<?php

    $scores = array(
        array (100, 100, 100),
        array (90, 80 ,70),
        array (55, 65, 75),
    );

    $names = array ("영자", "순자", "영철");
    $each_scores = array (0, 0, 0);

    for ($i=0; $i<count($scores); $i++)
    {
        for ($z=0; $z<count($scores[$i]); $z++)
        {
            $each_scores[$i] += $scores[$i][$z];
        }
    }

    for($i=0; $i<count($names); $i++)
    {
        print $names[$i] . " : " . $each_scores[$i] . "<br>";
    }
?>


<?php

    $scores = array(
        array (100, 100, 100),
        array (90, 80 ,70),
        array (55, 65, 75),
    );

    $names = array ("영자", "순자", "영철");
    $each_scores = array (0, 0, 0);

    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $each_scores[$i] += $scores[$i][$z];
        }
    }
    for($i=0; $i<count($names); $i++)
    {
        print $names[$i] . " : " . $each_scores[$i] . "<br>";
    }
?>

<?php
    $scores = array(
        array (100, 100, 100),
        array (90, 80 ,70),
        array (55, 65, 75),
    );

    $names = array ("영자", "순자", "영철");
    $each_sum = array (0, 0, 0);

    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $each_sum[$i] += $scores[$i][$z];
        }
    }
    for($i=0; $i<count($names); $i++)
        {
            print $names[$i] . " : " . $each_sum[$i] . "<br>";
        }
?>


