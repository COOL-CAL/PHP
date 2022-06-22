<?php
    namespace application\models;
    use PDO; //같은 namespace면 use 적을 필요 없음.

    class BoardModel extends Model {
        public function selBoardList() {
            $sql = "SELECT i_board, title, created_at
                      FROM t_board
                     ORDER BY i_board DESC
                   ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ); //fetch_obj 들어간 빼면 객체 아닌 배열이 넘어옴 
        }

        public function selBoard(&$param) {
            $sql = "SELECT A.i_board, A.title, A.ctnt, A.created_at,
                           B.nm
                      FROM t_board A
                     INNER JOIN t_user B
                        ON A.i_user = B.i_user
                     WHERE i_board =:i_board";
            $stmt = $this->pdo->prepare($sql); //prepared statement: 문장 완성, 쿼리문 실행
            $stmt->bindValue(':i_board', $param["i_board"]); //bindValue: 값을 넣어줌(정수, '문자열' 자동으로)
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function updBoard(&$param) {
            $sql = "UPDATE t_board
                       SET title = :title, ctnt = :ctnt
                     WHERE i_board = :i_board";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':title', $param["title"]);
            $stmt->bindValue(':ctnt', $param["ctnt"]);
            $stmt->bindValue(':i_board', $param["i_board"]);
            $stmt->execute();
        }

        public function delBoard(&$param) {
            $sql = "DELETE FROM t_board
                     WHERE i_board =:i_board";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':i_board', $param["i_board"]);
            $stmt->execute();
        }
    }