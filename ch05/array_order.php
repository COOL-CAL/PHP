<?php
    $arr_age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "John" => 24,
    );

    //값 정렬
    //sort(오름차순), rsort(내림차순)

    $copy_arr_1 = $arr_age; //깊은 복사, 안의 내용, 구조 똑같은 걸 하나 더 복사해서 총 2개가 나옴
                            //$arr_age = $arr_age, $copy_arr_1 = $arr_age
                            //변수 명 앞에 & 붙이면 얕은 복사
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";

    rsort($copy_arr_1); //reverse = rsort

    print "origin : ";
    print_r($arr_age);
    print "<br>";
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>---------------<br>";

    //키 정렬
    //ksort(오름차순), krsort(내림차순)
    //for문으로 -- 사용하는 게 더 나음

    $copy_arr_2 = $arr_age;
    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

    rsort($copy_arr_2);

?>

