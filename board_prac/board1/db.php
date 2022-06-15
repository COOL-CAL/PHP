<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    define("PORT", "3306");
    //DB파일에 들어있는 기본 정보들 정의
    function get_conn()
    {
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, PORT);
    }
    //$conn 변수에 연결 시킬 함수값(가져온 기본 정보들) 실행
?>