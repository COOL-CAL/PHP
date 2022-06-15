<?php
    $data = file("./name.txt");

    print_r($data);

    print "-----------<br>";
    foreach($data as $idx => $name) { //index 필요없으면 as 뒤에 $name만 적어도 됨
        print $name . "<br>";
    }