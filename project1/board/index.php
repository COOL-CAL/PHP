<?php
include_once "../db/db_board.php";

session_start();
$u_nick= "";
if(isset($_SESSION["login_user"])) {
    $login_user= $_SESSION["login_user"];
    $u_nick= $login_user["u_nick"];
}
$list= sel_board_list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Board</title>
</head>
<body>
    <div>
        <header>
            <div>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="../board/write.php">글쓰기</a>
                    <a href="../user/logout.php">로그아웃</a> </div>
                <?php } else { ?>
                    <div> <a href="../user/login.php">로그인</a> </div>
                    <div> <a href="../user/join.php">회원가입</a> </div>
                <?php } ?>
            </div>
        </header>
        <div class="top"><h2>게시판</h2></div>
        <table>
            <thead>
                <tr>
                    <th width=100>Post ID</th>
                    <th width=300>내용</th>
                    <th width=120>작성자</th>
                    <th width=200>작성일</th>
                    <!-- <th width=70>조회수</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach($list as $item) { ?>
                    <tr>
                        <td><?=$item["b_id"]?></td>
                        <td><a href="detail.php?b_id=<?=$item["b_id"]?>"><?=$item["b_title"]?></a></td>
                        <td><?=$item["u_nick"]?></td>
                        <td><?=$item["b_date"]?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <center>
            <button class="no" onclick="location.href='../admin/upload.php'">Upload</button>        
        </center>
    </div>
</body>
</html>