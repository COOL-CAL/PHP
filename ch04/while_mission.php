<?php
    /*
      1부터 val변수에 있는 숫자까지 모두 더하기
      그리고 결과값 출력
      while문 사용
    */
    $val = rand(50, 100);
    $sum = 0;
    $i = 0;
    print "val : $val <br>";

    while ($i < $val)
    {
      $sum += $i++;
    }
    print "sum : $sum <br>";
?>
