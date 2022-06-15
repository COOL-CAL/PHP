<?php
    include_once 'db.php';

    $i_board = $_GET['i_board'];
    $conn = get_conn();
    $squl =
    "DELETE FROM t_board
     WHERE i_board = ${i_board}
    ";

    $result = mysqli_query($conn, $squl);
    mysqli_close($conn);

    header ("location: list.php");
?>