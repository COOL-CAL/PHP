<?php
    $GLOBALS["foo"] = 10;

    foreach($GLOBALS as $key => $var) {
        print $key . " : ";
        print_r ($var); //print_r print reference: 문자열, 객체 출력할 때 사용
        print "<br>"; //print는 문자열만 출력 가능
    }

    $arr = [];
    print_r($var);