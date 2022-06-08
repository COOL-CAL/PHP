<?php
    /*
    rand(1, 10) 실행해서 10이 나올 때까지 반복.
    10이 아니면 숫자 출력
    10이 나오면 반복 멈추고 "끝" 출력
    */
    print "-- start -- <br>";
    $r_val = rand(1, 10);

    while ($r_val != 10)
    {
      print "r_val : $r_val <br>";
      $r_val = rand(1, 10);
    }
    print "-- end -- <br>";
?>
