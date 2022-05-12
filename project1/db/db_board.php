<?php
include_once "db.php";

// index.php
function sel_board_list() {
    $sql=
    "   SELECT B.b_id, B.b_ctnt, B.b_date
             , U.u_nick
          FROM board_t B
         INNER JOIN user_t U
            ON B.u_id = U.u_id
         ORDER BY B.b_id DESC
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// upload_proc.php
function ins_img(&$param) {
   $s_id= $param["s_id"];
   $target_filenm= $param["pic_img"];
   $pic_img= $param["pic_img"] == '' ? "NULL" : "'$target_filenm'";

   $sql= 
   "  INSERT INTO picture_t
      (s_id, pic_img)
      VALUES
      ('$s_id', $pic_img)
   ";
   
   $conn= get_conn();
   $result= mysqli_query($conn, $sql);
   mysqli_close($conn);
   return $result;
}

// write_proc.php
function ins_board(&$param) {
   $b_title = $param["b_title"];
   $b_ctnt = $param["b_ctnt"];
   $u_id = $param["u_id"];

   $sql = "INSERT INTO board_t (b_title, b_ctnt, u_id)
           VALUES ('$b_title', '$b_ctnt', '$u_id')
          ";

   $conn= get_conn();
   $result = mysqli_query($conn, $sql);
   mysqli_close($conn);
   return $result;
}

// detail.php
function sel_board(&$param) {
   $b_id = $param["b_id"];
   $sql = "SELECT B.b_title, B.b_ctnt, B.b_date
                , U.u_id, U.u_nick
             FROM board_t B
            INNER JOIN user_t U
               ON B.u_id = U.u_id
            WHERE B.b_id = $b_id";
   $conn = get_conn();
   $result = mysqli_query($conn, $sql);
   mysqli_close($conn);
   return mysqli_fetch_assoc($result);
}

// detail.php (next ctnt)
function sel_next_board(&$param) {
   $b_id = $param["b_id"];
   $sql = "SELECT b_id
             FROM board_t
            WHERE b_id > $b_id
            ORDER BY b_id
            LIMIT 1";

   $conn = get_conn();
   $result = mysqli_query($conn, $sql);
   mysqli_close($conn);
   $row = mysqli_fetch_assoc($result);
   if($row) {
       return $row["b_id"];
   }
   return 0;
}

// detail.php (previous ctnt)
function sel_prev_board(&$param) {
   $b_id = $param["b_id"];
   $sql = "SELECT b_id
             FROM board_t
            WHERE b_id < $b_id
            ORDER BY b_id DESC
            LIMIT 1";

   $conn = get_conn();
   $result = mysqli_query($conn, $sql);
   mysqli_close($conn);
   $row = mysqli_fetch_assoc($result);
   if($row) {
       return $row["b_id"];
   }
   return 0;
}