<?php
    include_once 'db/db_user.php';

    $uid = $_POST['uid'];
    $uid2 = 0;
    $upw = $_POST['upw'];
    $confirm_upw = $_POST['confirm_upw'];
    $nm = $_POST['nm'];
    $gender = $_POST['gender'];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender,
    ];

    $result = ins_user($param);

    echo "result : ", $result, "<br>";
    echo "uid : ", $uid, "<br>";
    echo "uid2 : ", $uid2, "<br>";
    echo "upw : ", $upw, "<br>";
    echo "confirm_upw : ", $confirm_upw, "<br>";
    echo "nm : ", $nm, "<br>";
    echo "gender : ", $gender, "<br>";

    header("location: login.php");


