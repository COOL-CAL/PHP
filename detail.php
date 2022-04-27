<?php
    include_once 'db/db_board.php';
    
    session_start();
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
    }

    $i_board = $_GET["i_board"];
    $param = [
        "i_board" => $i_board
    ];

    $item = sel_board($param);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item["title"]?></title>
</head>
<body>
    <div><a href="list.php">LIST</a></div>
    <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]) { ?>
        <div>
            <a href="mod.php?i_board=<?=$i_board?>"><button>EDIT</button></a>
            <button onclick="isDel();">DELETE</button></a>
        </div>
    <?php } ?>
    <div>Title: <?=$item["title"]?></div>
    <div>Name: <?=$item["nm"]?></div>
    <div>Date: <?=$item["created_at"]?></div>
    <div><?=$item["ctnt"]?></div>
    <!-- event: ~했을 때, 어떤 함수를 실행하겠다. (event binding) -->
    <script>
        function isDel()
        {
            console.log('isDel 실행됨');
            if(confirm('Do you really want delete this post?'))
            {
                location.href = "del.php?i_board=<?=$i_board?>";
            }
        }
    </script>
</body>
</html>

