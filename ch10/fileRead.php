<?php
    $filep = fopen("../lorem.txt", "r");

    if(!$filep) {
        die("This file can not road.");
    }
    print "The file is roaded. <br>";

    while($line = fgets($filep, 10)) {
        print $line . "<br>";
    }

    fclose($filep);