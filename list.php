<?php
    session_start();
    $nm = "";
    if(isset($_SESSION["login_user"]))
    {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>list</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? "<div>" . "Welcome,". $nm . "</div>" : ""?>
            <div>
                <a href="list.php">LIST</a>
                <a href="write.php">WRITE</a>
                <?=isset($_SESSION["login_user"]) ? "<a href='logout.php'>LOGOUT</a>" : "<a href='login.php'>LOGIN</a>"?>
            </div>
        </header>

        <main>
            <h1>LIST</h1>
        </main>
    </div>
</body>
</html>
    <!--
    <.?php
        if($nm !== "") //if(isset($_SESSION["login_user"]))
        {
            echo "<div>Welcome, ${nm}</div>";
            //<div>Welcome,<.?=$nm?.>.</div> (물음표 뒤에 점 빼야함 일부러 붙인 거임)
        }
    ?>
    -->
    
    