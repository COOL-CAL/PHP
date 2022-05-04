<?php
    include_once 'db.php';

    function ins_board($param) {
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql = "INSERT INTO t_board (title, ctnt, i_user)
                VALUES ('$title', '$ctnt', '$i_user')";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_paging_count(&$param) {
        $row_count = $param["row_count"];
        $sql = "SELECT CEIL(COUNT(i_board) / $row_count) as cnt
                FROM t_board";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        return $row["cnt"];
    }

    function sel_board_list($param) {
        $start_idx = $param["start_idx"];
        $row_count = $param["row_count"];

        $sql = "SELECT A.i_board, A.title, A.created_at
                     , B.nm
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                 ORDER BY A.i_board DESC
                 LIMIT $start_idx, $row_count";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT A.title, A.ctnt, A.created_at
                     , B.i_user, B.nm
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                 WHERE A.i_board = $i_board";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

    function sel_next_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT i_board
                  FROM t_board
                 WHERE i_board > $i_board
                 ORDER BY i_board
                 LIMIT 1";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["i_board"];
        }
        return 0;
    }

    function sel_prev_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT i_board
                  FROM t_board
                 WHERE i_board < $i_board
                 ORDER BY i_board DESC
                 LIMIT 1";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["i_board"];
        }
        return 0;
    }

    function upd_board(&$param) {
        $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

        $sql = "UPDATE t_board
                   SET title = '$title'
                     , ctnt = '$ctnt'
                     , updated_at = now()
                 WHERE i_board = $i_board
                   AND i_user = $i_user";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function del_board(&$param) {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];

        $sql = "DELETE FROM t_board
                 WHERE i_board = $i_board
                   AND i_user = $i_user";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function search_board(&$param) {
        $conn = get_conn();
        
        $search_select = $param["search_select"]; //select선택값
        $search_input_txt = $param["search_input_txt"];//검색어
        $textArray = explode(" ", $search_input_txt); //검색어를 "공백"으로 나눈다

        $where = []; //sql검색 시 열(속성) 이름
        $sql = "SELECT A.i_board, A.title, A.ctnt, A.created_at
                       , B.i_user, B.nm
                    FROM t_board A
                   INNER JOIN t_user B
                      ON A.i_user = B.i_user
                   WHERE ";
                   //중복되는 열만 a,b로 나눠 적어줌

        switch($search_select) {
            case "search_writer":
                $where += ["B.nm"];
                break;
            case "search_title":
                $where += ["A.title"];
                break;
            case "search_ctnt":
                $where += ["A.title", "A.ctnt"];
                break;
            default:
        }

       for($i = 0; $i < count($textArray); $i++) {
           for($j=0; $j < count($where); $j++) {
               $sql = $sql . " $where[$j] LIKE '%$textArray[$i]%' ";
                //마지막 검색어가 아니면

                if(($i !== count($textArray)-1) || ($j !== count($where) -1)) { //마지막 검색어가 아니면
                    $sql = $sql . "OR";
                }
            }
        }

        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    // function view_count(&$params) {
    //     $conn = get_conn();

    //     //날짜 정보 가져오기
    //     $YY = date('Y');
    //     $MM = date('m');
    //     $DD = date('d');
    //     $dat = $YY . "-" . $MM . "-" . $DD;

    //     $sql = "SELECT * FROM count_db
    //             WHERE redate = '$dat'";
        
    //     $result = mysqli_query($conn, $sql);
    //     $list = mysqli_num_rows($result);

    //     if(!$list) { //아무도 들어온 적이 없어서 date 정보가 없을 경우
    //         $count = 0; // count = 0
    //     } else { //누군가가 들어온 적이 있어서 date 정보가 존재할 경우
    //         $row = mysqli_fetch_assoc($result);
    //         $count = $row['count']; // 현재 날짜의 count값을 가져온다
    //     }
    
    //     if($count === 0) {
    //         $count++; //오늘 날짜로 새로운 count값을 추가
    //         $sql = "INSERT INTO count_db
    //                 VALUES ($count, '$dat')";
    //     } else {
    //         $count++; //오늘 날짜의 기존 count값을 변경
    //         $sql = "UPDATE count_db
    //                    SET count = $count
    //                  WHERE redate = '$dat'";
    //     }
    
    //     mysqli_query($conn, $sql);
    //     //total views - 모든 count값을 sum()에 적용
    //     $totalQuery = "SELECT SUM(count) as cnt
    //                      FROM count_db";
    //     $totalCount = mysqli_fetch_assoc(mysqli_query($conn, $totalQuery))['cnt'];
    //     mysqli_close($conn);
    // }