<?php
    include_once 'db/db_board.php';

    session_start();
    $login_user = $_SESSION['login_user'];
    $i_user = $login_user['i_user'];
    $i_board = $_GET['i_board'];

    $param = [
        "i_board" => $i_board,
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt
    ];

    $item = sel_board($param);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <h1>EDIT</h1>
    <a href="detail.php?i_board=<?=$i_board?>"><button>Back to Content</button></a>
    <form action="mod_proc.php?i_board=<?=$i_board?>" method="post">
        <input type="hidden" name="i_board" value="<?=$i_board?>">
        <div>
            <input type="text" name="title" placeholder="TITLE" value="<?=$item['title']?>">
        </div>
        <div>
            <textarea name="ctnt" placeholder="CONTENT"><?=$item['ctnt']?></textarea>
        </div>
        <div>
            <input type="submit" value="EDIT">
            <input type="reset" value="RESET">
        </div>
    </form>
</body>
</html>