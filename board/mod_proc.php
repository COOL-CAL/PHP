<?php
    // 수정 완료 후 detail.php로 이동
    include_once 'db.php';

    $i_board = $_POST['i_board'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];

   
    $conn = get_conn();

    $sql =
    "UPDATE t_board
     SET title = '$title', ctnt = '$ctnt' /*, mod_at = now()*/
     WHERE i_board = $i_board
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: detail.php?i_board=$i_board");
    //쿼리 스트링. url + ? 위치 = $(위치)

?>