<?php
   // 과목별 합계, 평균

   $scores = array(
        //국, 영, 수
        array(100, 100, 100), 
        array(90, 80, 70),
        array(55, 65, 75),
        array(90, 88, 55),
   );

   $subs = array ("국어", "영어", "수학");
   $each_sum = array (0, 0, 0,);
   $each_avg = array (0, 0, 0,);

   for($i=0; $i<count($scores); $i++)
   {
        for($z=0; $z<count($scores); $z++)
        {
            $each_sum[$i] += $scores[$z][$i];
        }
   }
   for($i=0; $i<count($each_sum); $i++)
   {
       $each_avg[$i] = $each_sum[$i] / count($each_sum); 
   }
   for($i=0; $i<count($subs); $i++)
   {
       print "$subs[$i]<br> 합계 :  $each_sum[$i], 평균 :  $each_avg[$i]<br>";
   }

   /*
   $subs = array ("국어", "영어", "수학");
   $each_sum = array ();

   for($i=0; $i<count($scores); $i++)
   {
       for($z=0; $z<count($scores[$i]); $z++)
       {
           $each_sum[$z] += $scores[$i][$z];
       }
   }
   for($i=0; $i<count($subs); $i++)
   {
       $sum = $each_sum[$i];
       $each_avg = $sum / count($scores);
       print $subs[$i] . "<br>";
       print "합계 : $sum, 평균 : $each_avg <br>";
       print "<br>";
   }
   */
?>


