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
            <!-- <a href="mod.php"><button>EDIT</button></a> -->
            <a href="mod.php?i_board=<?=$i_board?>"><button>EDIT</button></a>
            <!-- <a href="del.php"><button>DELETE</button></a> -->
            <button onclick="isDel();">DELETE</button>
        </div>
    <?php } ?>
    <div>TITLE : <?=$item["title"]?></div>
    <div>NAME : <?=$item["nm"]?></div>
    <div>DATE : <?=$item["created_at"]?></div>
    <div>CONTENT : <?=$item["ctnt"]?></div>
    <script>
        function isDel() {
            console.log('isDel Worked!!');
            if(confirm('Do you want to delete this content?')) {
                location.href = "del.php?i_board=<?=$i_board?>";
            }
        }
    </script>
</body>
</html>