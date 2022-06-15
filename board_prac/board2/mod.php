<?php
    include_once 'db.php';

    $i_board = $_GET['i_board'];
    $sql = 
    "SELECT title, ctnt
     FROM t_board
     WHERE i_board = $i_board
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    }

    //detail, 수정, 삭제, 리스트는 무조건 pk가 필요하다
    //보통 pk값은 수정을 잘 안하니깐 이렇게 숨겨도 된다
    /*수정할때 굳이 i_board 값이 보일 필요 없긴하고 post방식으로
    i_board값을 보내줘야 mod_proc에서 몇번째 번호(i_board)의 
    제목이나 내용을 수정해야하는지 알기위해 필요한 것 같은데요
    form에 담아서 액션으로 보내줄때 mod_proc.php?i_board=$i_borad
    이렇게 url에 보드값을 보내주는 것이 아니라서 mod_proc 에서는
    get 방식으로 i_board값을 알지 못해요
    ALTER TABLE t_board ADD mod_at datetime DEFAULT NOW();
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h1>글수정</h1>
    <a href="detail.php?i_board=<?=$i_board?>"><button>글로 이동</button></a>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_board" value="<?=$i_board?>">
        <div>
            <input type="text" name="title"
            placeholder="제목" value="<?=$title?>">
        </div>
        <div>
            <textarea name="ctnt" placeholder="내용"><?=$ctnt?></textarea>
        </div>
        <div>
            <input type="submit" value="글등록">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>
