<?php
    $week = array("일", "월", "화", "수", "목", "금", "토");

    print $week[0] . "<br>";
    print $week[3] . "<br>";

    $week[3] = "Wed";
    print $week[3] . "<br>";

    $week[7] = "응?";
    print $week[7] . "<br>";

    $week[9] = "ㅁㅁ";
    print $week[8] . "<br>";
    print $week[9] . "<br>";
    print $week[11] . "<br>";
    print "test <br>";

    $test = array("A", "B");
    print count($test) . "<br>";

    //$test[10] = "C";
    // 직접 index를 주는 것은 위험하다. 숫자 계산을 잘못하면 문제가 됨.
    // 배열의 마지막에 값 추가 array_push
    // =이 없으면 읽기전용
    // =은 오른쪽에 있는 값을 왼쪽으로
    array_push($test, "C", "D");

    // $test만 치게 되면 변수로 인식하기 때문에 \를 앞에 추가해야 함.
    print "count(\$test) : " . count($test) . "<br>";

    print "test[2] : " . $test[2] . "<br>";
    print "test[3] : " . $test[3] . "<br>";
  
    print "---------------<br>";
    $test2 = array(1, 3.44, "안녕"); // 타입 무조건 맞춰서 쓰자!
    print $test2[0];
    print $test2[1];
    print $test2[2];
?>
  
  
  
  <!--
  
  변수는 값 하나만 저장할수 있다.
  모든 변수는 값 "하나밖에" 저장이 안된다.
  
  값 저장하려면 변수하나에 값 하나씩 할당해야함
  여러개의 값을 한곳에다 담고 싶을 때 "배열"
  
  변수 = 주택
  배열 = 아파트 (다방)
  값 = 호실번호 (0번부터 시작)
  
  
  배열 : 여러개 값을 한곳에 몰아서(묶어서) 쓰고싶어서 쓰는것.
  ☆배열 & for문 : 같이 쓰는 시너지 효과 good! 5만개도 3줄컷 가능.☆
  배열 만들면 번호 할당! 0부터~ 0 1 2 3 4 5 번방
  
  읽기 : $week 값 하나가 저장. array 한테 접근할 수 있는 값.
  쓰기 : 
  
  
  - 객체지향의 시작점 (매커니즘 이해하자!)
  $week : 배열에 접근할수 있는 주소값 저장!
  array 배열에 접근하면 : 일 월 화 수 목 금 토 다 쓸수 있음!
  
  
  
  = 은 오른쪽 값을 복사하여 왼쪽에 준다!
  =이 있어야 변수를 바꿀수 있다!
  
  -->