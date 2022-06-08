<?php
    print "---------- break ---------- <br>";
    for ($i=0; $i<20; $i++)
    {
      if ($i == 12) { break ; } //중간에 멈추고 싶을 때 쓰임
      print $i . "<br>";
    }

    print "---------- continue ---------- <br>";
    for ($i=0; $i<20; $i++)
    {
      if ($i == 12) { continue ; } // 바로 밑에 있는 거 skip
      print $i . "<br>";
    }
?>
