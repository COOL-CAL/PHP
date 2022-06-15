<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    $conn = mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME); //connection이 있어야 db에 연결 가능
                      //localhost
    //변수에 정보가 들어갈 값을 넣어줌
    $sql = "INSERT INTO t_board(title, ctnt)
    VALUES('test', 'content')";
    //쿼리문 작성
    //t_board의 title, ctnt에 정보를 삽입하고 고정값 지정해줌
    mysqli_query($conn, $sql);
    //쿼리안에 들어가는 변수 두 개
    mysqli_close($conn);
    //쿼리 닫기(리소스 많이 잡아먹음)

    // 1.(INSERT, UPDATE, DELETE) => 0, 1 (false, true)
    // 2. SELECT - 최대 1개 가져오는 것. 0, 1개(배열) (두 줄 넘어가면 에러) detail.php
    // 3. SELECT - 여러 개. 0, 1, 2 => 배열 (여러 개 넘어왔을 때 다 처리, 한 개만 넘어와도 상관x) list.php/mod.php
    // 2번엔 where절에 pk값이 들어감, 3번은 거의 안 들어감
    // 없는 값을 넣으면 0, 있는 pk값을 넣으면 1(줄)이 뜬다.
?>  