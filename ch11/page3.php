<?php
    //session은 한 컴퓨터에 브라우저마다 적용됨
    //session은 값을 담고, 값을 빼는 용도
    session_start();
    $_SESSION['g'] = "This is a Global variable.";
    //배열이라고 생각하면 됨 like array (세션 안에 g라는 방)
    //jwt: json wep token 자동로그인에 사용됨, 쿠키랑 비슷함
?>
<a href="page4.php">Next page</a>