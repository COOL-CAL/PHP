<?php
    echo "Country : ", $_COOKIE['country'], "<br>";

    $_COOKIE['country'] = "UK";
    echo "Country : ", $_COOKIE['country'], "<br>";

    // korea쿠키 자체를 지우고싶을 때 
    //unset($_COOKIE['country']);
    setcookie("country", "UK");

    echo "Country : ", $_COOKIE['country'], "<br>";
    //session은 서버에 cookie는 클라이언트한테 저장, 그래서 보안이 약함