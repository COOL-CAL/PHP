<?php
    include_once 'db.php';

// check.php, join.php, login_proc.php 
function sel_user(&$param) {
    $u_nm = $param["u_nm"];

    $sql = "SELECT u_id, u_nm, u_pw, u_mail
              FROM user_t
             WHERE u_nm = '{$u_nm}'";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_array($conn);
}

//join_proc.php
function ins_join(&$param) {
    $u_nm = $param["u_nm"];
    $u_pw = $param["u_pw"];
    $u_mail = $param["u_mail"];

    $conn = get_conn();
    $sql = "INSERT INTO user_t (u_nm, u_pw, u_mail, u_date)
            VALUES ('$u_nm' '$u_pw', '$u_mail', now())";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}