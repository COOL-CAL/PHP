<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_proc.php" method="post" enctype="multipart/form-data"> <!--enctype 필수로 적을 것. -->
        <div><label for="">image <input type="file" name="img" accept="image/*"></label></div> <!--image확장자만 보임 -->
        <div><input type="submit" value="upload"></div>
    </form>
</body>
</html>