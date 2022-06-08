<?php
    $arr = [4, 9, 10, 22, 100, 45, 99, 11];

    /*
    krsort($arr);

    print_r ($arr);
    

    for($i=count($arr)-1; $i>=0; $i--) {
        print $arr[$i] . "<br>"; 
    };
    */

    print "-----------------------<br>";
    //역순
    $j = count($arr);
    for($i=1; $i<=$j; $i++) {
        print $arr[$j - $i]. "<br>";
    }