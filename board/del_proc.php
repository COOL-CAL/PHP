<?php
    include_once 'db.php';

    $i_board = $_GET['i_board'];
    $conn = get_conn();
    $sql =
    "DELETE FROM t_board
     WHERE i_board = ${i_board}
    ";
    //쿼리문 안 변수 빼고 다 하드코딩(바뀌지 않음)
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list.php");
?>


