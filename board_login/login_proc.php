<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    echo "uid : " , $uid . "<br>";
    echo "upw : " , $upw . "<br>";

    $param =
    [
        "uid" => $uid
    ];

    $result = sel_user($param);
    if(empty($result))
    {
        echo "This ID dosen't exist.";
        die;
    }

    echo "i_user : " ,$result["i_user"], "<br>";
    echo "upw : " ,$result["upw"], "<br>";
    
    if($upw === $result["upw"]) //로그인 성공
    {
        session_start();
        $_SESSION ["login_user"] = $result;
        header ("location: list.php");
    }
    else
    {
        header ("location: login.php");
    }

