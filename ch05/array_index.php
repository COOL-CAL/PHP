<?php
    $numbers = array(10, 20, 5=>30, 40); //사용 지양, 코드 꼬임

    print_r($numbers);
    print "<br>";
    print "count : " . count($numbers) . "<br>";

    $numbers["2"] = 30;

    for($i=0; $i<count($numbers); $i++)
    {
        print $numbers[$i] . "<br>";
    }
    print "-- end --";
?>