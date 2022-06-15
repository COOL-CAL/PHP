<?php
    $filep = fopen("../lorem.txt", "a");

    if(!$filep) {
        die("This file can not road.");
    }
    print "The file is roaded. <br>";

    while($line = fgets($filep, 10)) {
        print $line . "<br>";
    }

    fputs($filep, "\nROMEO : *dead*"); // \n: 앞에서 개행. (escape 문자)

    fclose($filep);