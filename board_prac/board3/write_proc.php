<?php
    include_once 'db.php';

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title: $title <br>";
    print "ctnt: $ctnt <br>";

    $conn = get_conn();
    $sql =
    " INSERT INTO t_board (title, ctnt)
      VALUES ('${title}', '${ctnt}')
    ";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    print "result: $result <br>";

    header("location: list.php");

?>