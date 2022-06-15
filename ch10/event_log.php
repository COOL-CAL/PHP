<?php
    $filep = fopen("./logfile.txt", "a");
    if(!$filep) {
        die("This file can not road.");
    }

    $now = date("Y-m-d H:i:s", time());
    fputs($filep, $now . "\n");
    fclose($filep);

    print "Connect Service.";