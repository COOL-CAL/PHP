<?php
    include_once 'db.php';

    $i_board = $_POST['i_board'];
    $ctnt = $_POST['ctnt'];
    $title = $_POST['title'];

    $conn = get_conn();
    $sql = 
    "UPDATE t_board
     SET title = '$title', ctnt = '$ctnt'
     WHERE i_board = $i_board
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: detail.php?i_board=$i_board");
?>