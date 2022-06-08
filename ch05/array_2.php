<?php
    $arr = array(); //$arr = []; 같음

    $val = 10;
    for ($i=0; $i < 10; $i++){
        $arr[$i] = $val;
        $val += 10;
        print "arr[$i]: $arr[$i]<br>";
    };

    /*
    print "arr[0]: " . $arr[0] . "<br>";
    print "arr[1]: " . $arr[1] . "<br>";
    print "arr[2]: " . $arr[2] . "<br>";
    print "arr[3]: " . $arr[3] . "<br>";
    print "arr[4]: " . $arr[4] . "<br>";
    */

    /*
    for($i=0; $i<10; $i++) {
        print "arr[$i]: $arr[$i]<br>";
    }
    */

    