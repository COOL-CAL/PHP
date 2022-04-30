<?php
    session_start();
    $login_user = $_SESSION["login_user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
</head>
<body>
    <h1>WRITE</h1>
    <form action="write_proc.php" method="post"> <!-- 여러 개  파일을 액션  링크로 post방식으로 보냄 -->
        <div>
            <input type="text" name="title" placeholder="TITLE">
        </div>
        <div>
            <textarea name="ctnt" placeholder="CONTENT"></textarea>
        </div>
        <div>
            <input type="submit" value="WRITE">
            <input type="reset" value="RESET">
        </div>
    </form>
</body>
</html>