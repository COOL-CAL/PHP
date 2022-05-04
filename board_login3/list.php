<?php
    include_once 'db/db_board.php';

    session_start();
    $nm = "";

    $page = 1;

    if(isset($_GET["page"])) {
        $page = intval($_GET["page"]);
    }

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

    if(isset($_POST['search_input_txt']) && $_POST['search_input_txt'] !="") {
        $param += [ //+= 배열에 이어주는 역할
            "search_select" => $_POST["search_select"], //select박스, value값
            "search_input_txt" => $_POST["search_input_txt"], //검색어
        ];

        $list = search_board($param);
    }

    // $count = view_count($param);
    
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
            <div>
                <?php
                    echo "<center>[ today: <font color = red>";
                    echo "$count ";
                    echo "</font>] <br>";
                
                    echo "[ total: <font color = blue>";
                    echo "$totalCount ";
                    echo "</font>] <br>";
                ?>
            </div>
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
                <span class="<?=$i===$page ? "pageSelected" : ""?>">
                    <a href="list.php?page=<?=$i?>"><?=$i?></a>
                </span>
            <?php } ?>
            </div>
        </main>
        <form action="list.php" method="post">
            <div>
                <select name="search_select">
                    <option value="search_writer">NAME</option>
                    <option value="search_title">TITLE</option>
                    <option value="search_ctnt">TITLE + CONTENT</option>
                </select>
                <div>
                    <input type="text" name="search_input_txt">
                    <input type="submit" value="SEARCH">
                </div>
            </div>
        </form>
    </div>
</body>
</html>