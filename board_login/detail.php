<?php
    include_once "db/db_board.php";
    session_start();
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
    }
    $page = $_GET["page"];
    $i_board = $_GET["i_board"];
    $search_txt = $_GET["search_txt"];

    $search_txt = "";
    if(isset($_GET["search_txt"])) {
        $search_txt = $_GET["search_txt"];
    }

    $param = [
        "i_board" => $i_board,
        "page" => $page,
        "search_txt" => $search_txt,
    ];

    $item = sel_board($param);
    $next_board = sel_next_board($param);
    $prev_board = sel_prev_board($param);
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
    <div><a href="list.php?page=<?=$page?> <?= $search_txt !== "" ? "&search_txt=" . $search_txt : ""?>">LIST</a></div>
    <?php if($prev_board !== 0) { ?>
        <a href="detail.php?i_board=<?=$prev_board?>"><button>PREVIOUS</button></a>
    <?php } ?>

        <?php if($next_board !== 0) { ?>
            <a href="detail.php?i_board=<?=$next_board?>"><button>NEXT</button></a>
        <?php } ?>
    </div>
    <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]) { ?>
        <!-- if()가 true면 && 뒷쪽 실행, false면 뒷쪽이 true여도 실행 안됨-->
        <div>
            <a href="mod.php?i_board=<?=$i_board?>"><button>EDIT</button></a>
            <button onclick="isDel();">DELETE</button></a>
        </div>
    <?php } ?>
    <div>Title: <?=str_replace($search_txt, "<mark>{$search_txt}</mark>", $item["title"])?></div>
    <div>Name: <?=$item["nm"]?></div>
    <div>Date: <?=$item["created_at"]?></div>
    <div><?=$item["ctnt"]?></div>
    <!-- event: ~했을 때, 어떤 함수를 실행하겠다. (event binding) -->
    <script>
        function isDel()
        {
            console.log('isDel 실행됨');
            if(confirm('Do you really want delete this post?')) //실행되면 true를 return, 취소하면 false를 return
            {
                location.href = "del.php?i_board=<?=$i_board?>";
            }
        }
    </script>
</body>
</html>

