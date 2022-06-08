<?php
    session_start();
    $_SESSION['var1'] = "v1";
    $_SESSION['var2'] = "v2";
    //세션에 특정 키값 부여

    //unset($_SESSION['var2']);

    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
    //그 키값 출력
?>
<a href="session_destroy.php">destroy</a>
