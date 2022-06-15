<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/join.css">
    <title>JOIN</title>
</head>
<body>
    <header>
        <a href="../board/index.php">← MAIN</a>
    </header>
    <fieldset>
        <legend><h2> SIGN UP </h2></legend>
        <form action="join_proc.php" method="post" name="join" autocomplete="off">
            <div><input type="text" name="u_nm" id="u_nm" class="data" placeholder="NAME" required autofocus></div>
            <div><input type="text" name="u_id" id="u_id" class="data" placeholder="ID" required autofocus></div>
            <input type="hidden" name="decide_id" id="decide_id">
            <div>
                <span id="decide" style='color:red;'>This ID already exist.</span>
                <input type="button" id="check_button" value="CHECK" onclick="checkid();">
            </div>
            <div><input type="password" name="u_pw" id="u_pw" class="data" placeholder="PASSWORD" required></div>
            <div><input type="password" name="confirm_u_pw" id="confirm_u_pw" class="data" placeholder="CONFIRM PASSWORD" required></div>
            <div>
                <input type="text" name="u_mail1" id="u_mail1" class="data" onfocus="this.value=''" placeholder="E-MAIL ADDRESS" required>
                @ <input type="text" name="u_mail2" id="u_mail2" class="data" value="" disabled>
                <select name="u_mail" class="data" onchange="mail_change()">
                    <option value="0">CHOOSE</option>
                    <option value="naver.com">NAVER</option>
                    <option value="gmail.com">GMAIL</option>
                    <option value="daum.net">DAUM</option>
                    <option value="1">WRITE YOURSELF</option>
                </select>
            </div>
            <div><input type="button" class="join_button" id="join_button" onclick="pw_check();" value="SIGN UP" disabled></div>
        </form>
    </fieldset>
    <small><a href="login.php">DO YOU HAVE ALREADY YOUR ACCOUNT?</a></small>
    <script src="join.js"></script>
</body>
</html>