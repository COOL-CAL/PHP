<?php
    session_start();
    $login_user = $_SESSION["login_user"];

    include_once 'db/db_board.php';

    $i_user = $login_user["i_user"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    echo "title : $title <br>";
    echo "ctnt : $ctnt <br>";

    $param =
    [
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt
    ];

    $result = ins_board($param);

    header("Location: list.php");
