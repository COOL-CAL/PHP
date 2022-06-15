<?php
    define ("URL", "localhost"); //키값이기 때문에 쌍따옴표를 붙임
    define ("USERNAME", "root"); 
    define ("PASSWORD", "506greendg@");
    define ("DB_NAME", "board1");

    $conn = mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);

    $sql = "INSERT INTO t_board (title, ctnt)
            VALUES ('test', 'contents')
           ";
    
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>