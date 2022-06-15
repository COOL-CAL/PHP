<?php
    $filep = fopen("./exam6.txt", "a");
    $filep2 = file_get_contents("./exam6.txt");
    $filep3 = fopen("./exam6_capital.txt", "a");

    print $filep2;

    if(!$filep) {
        die("This file can not road.");
    }
    print "The file is roaded. <br>";
 
    while($line = fgets($filep, 1024)) {
        print $line . "<br>";
        $line2 = strtoupper($filep3);
        fputs($filep3, $line2);
    }
    // $line2 = strtoupper($filep2);
 
    // print $line2;
    // fputs($filep3, $line2);

    // fclose($filep3);