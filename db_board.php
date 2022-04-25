<?php
    include_once 'db/db.php';
    
    function ins_board($param)
    {
        $i_user = $param['i_user'];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $conn = get_conn();
        $sql =
        "INSERT INTO t_board (i_user, title, ctnt)
         VALUES ('$i_user','$title', '$ctnt')
        ";

        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }