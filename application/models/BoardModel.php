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

        public function selBoard() {

        }
    }