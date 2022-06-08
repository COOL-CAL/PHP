<?php
    $arr = array(); // 이 배열에 넣을 수 있는 최대 값 5개까지

    for($i=0; $i<5; $i++) {
        $val = rand(1, 8);

        $check = 0; //0: 중복 아님, 1: 중복
        for($z=0; $z<count($arr); $z++) {
            if($arr[$z] === $val) {
                $check = 1;
                break;
            }
        }
        if($check) {
            $i--;
        } else {
            array_push($arr, $val);
        }
    }
    print_r($arr);