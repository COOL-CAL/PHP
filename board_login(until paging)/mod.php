<?php
    include_once 'db/db_board.php';
    $i_board = $_GET["i_board"];
    $param = [
        "i_board" => $i_board,
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
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_board" value="<?=$i_board?>" readonly>
        <div><input type="text" name="title" placeholder="TITLE" value="<?=$item["title"]?>"></div>
        <div><textarea name="ctnt" placeholder="CONTENT"><?=$item["ctnt"]?></textarea></div>
        <div>
            <input type="submit" value="EDIT">
            <input type="reset" value="RESET">
        </div>
    </form>
</body>
</html>