<?php
    session_start();
    $login_user = $_SESSION['login_user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRITE</title>
</head>
<body>
    <h1>WRITE</h1>
    <form action="write_proc.php" method="post">
        <div><input type="text" name="title" placeholder="TITLE"></div>
        <div><textarea name="ctnt" placeholder="CONTENT" id="" cols="30" rows="10"></textarea></div>
        <div>
            <input type="submit" value="WRITE">
            <input type="reset" value="RESET">
        </div>
    </form>
</body>
</html>