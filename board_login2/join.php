<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
</head>
<body>
    <h1>SIGN UP</h1>
    <a href="login.php">LOGIN</a>
    <form action="join_proc.php" method="post">
        <div> <input type="text" name="uid" placeholder="ID"> </div>
        <div> <input type="password" name="upw" placeholder="PASSWORD"> </div>
        <div> <input type="password" name="confirm_upw" placeholder="PASSWORD CONFIRM"> </div>
        <div> <input type="text" name="nm" placeholder="NAME"> </div>
        <div>
            GENDER: <label>FEMALE<input type="radio" name="gender" value="0" checked></label>
                    <label>MALE<input type="radio" name="gender" value="1"></label>
        </div>
        <div>
            <input type="submit" value="SIGN UP">
            <input type="reset" value="RESET">
        </div>
    </form>
</body>
</html>