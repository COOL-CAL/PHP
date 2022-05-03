<?php
    include_once 'db/db_board.php';

    session_start();
    $nm = "";
    $page = $_GET["page"];
    if(!$page) {
        $page = 1;
    } else {
        $page = intval($page);
    }
    print "page : " . $page;

    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }

    $row_count = 5;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count
    ];
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>LIST</title>
</head>
<body>
    <div id="container">
        <header>
        <?=isset($_SESSION["login_user"]) ? "<div>" . "Welcome, " . $nm . "</div>" : "" ?>
        <div>
            <a href="list.php">LIST</a>
            <?php if(isset($_SESSION["login_user"])) { ?>
                <a href="write.php">WRITE</a>
                <a href="logout.php">LOGOUT</a>
            <?php } else { ?>
                <a href="login.php">LOGIN</a>
            <?php } ?>
        </div>
        </header>
        <main>
            <h1>LIST</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($list as $item) { ?>
                        <tr>
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                            <td><?=$item["nm"]?></td>
                            <td><?=$item["created_at"]?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div>
            <?php for($i=1; $i<=$paging_count; $i++) { ?>
                <span><a href="list.php?page=<?=$i?>"><?=$i?></a></span>
            <?php } ?>
            </div>
        </main>
    </div>
</body>
</html>