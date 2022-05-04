<?php
    include_once 'db/db.php';
    // db와 연결 시도 하여 connection 객체 얻어오기
    $conn = get_conn();
    //날짜 정보 가져오기
    $YY = date('Y');
    $MM = date('m');
    $DD = date('d');
    $dat = $YY . "-" . $MM . "-" . $DD;

    $sql = "SELECT * FROM count_db
             WHERE redate = '$dat'";
    
    $result = mysqli_query($conn, $sql);
    $list = mysqli_num_rows($result);

    if(!$list) { //아무도 들어온 적이 없어서 date 정보가 없을 경우
        $count = 0; // count = 0
    } else { //누군가가 들어온 적이 있어서 date 정보가 존재할 경우
        $row = mysqli_fetch_assoc($result);
        $count = $row['count']; // 현재 날짜의 count값을 가져온다
    }

    if($count === 0) {
        $count++; //오늘 날짜로 새로운 count값을 추가
        $sql = "INSERT INTO count_db
                VALUES ($count, '$dat')";
    } else {
        $count++; //오늘 날짜의 기존 count값을 변경
        $sql = "UPDATE count_db
                   SET count = $count
                 WHERE redate = '$dat'";
    }

    mysqli_query($conn, $sql);
    //total views - 모든 count값을 sum()에 적용
    $totalQuery = "SELECT SUM(count) as cnt
                     FROM count_db";
    $totalCount = mysqli_fetch_assoc(mysqli_query($conn, $totalQuery))['cnt'];
    mysqli_close($conn);


    echo "<br><center><h2> 방문자 수 통계입니다. </h2><hr>";
    echo "[ today: <font color = red>";
    echo "$count ";
    echo "</font>] <br>";

    echo "[ total: <font color = blue>";
    echo "$totalCount ";
    echo "</font>] <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>방문자 수 통계</title>
</head>
<body>
    
</body>
</html>