<?php
    $addr = gethostbyname("localhost"); //same as "localhost", 도메인 주소 넣어도 IP 주소로 변환 ex) www.google.com
    $port = 5091;
    print "addr : {$addr} <br>";

    if(($sock = socket_create(AF_INET, SOCK_STREAM, 0)) < 0) {
        echo "socket_create() failed: reason: " . socket_strerror($sock) . "<br>";
    };
