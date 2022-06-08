<?php
    $arr = [10, 33, 12, 8, 1, 89];

    print_r($arr);
    print "<br>";

    $temp = $arr[0];
    $arr[0] = $arr[1];
    $arr[1] = $temp;

    //위치 바꾸고 싶은 것을 임시 저장소에 옮겨놓기
    //임시 저장소 = $temp

    print_r($arr);
    print "<br>";

?>