<?php
    namespace application\controllers;
    use application\models\BoardModel;

    class BoardController extends Controller {
        public function list() {
            $model = new BoardModel();
            // $this->list = $model->selBoardList();
            $this->addAttribute("title", "List"); //addAttribute: 속성 추가
            $this->addAttribute("list", $model->selBoardList());
            $this->addAttribute("js", ["board/list"]); //자바스크립트 추가, ["파일 주소값"]
            $this->addAttribute(_HEADER, $this->getView("template/header.php"));
            $this->addAttribute(_MAIN, $this->getView("board/list.php"));
            $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
            return 'template/t1.php'; //view 파일명
        }

        public function detail() {
            $i_board = $_GET["i_board"];

            $model = new BoardModel();
            // print "i_board : {$i_board} <br>";
            $param = ["i_board" => $i_board];
            $this->addAttribute("data", $model->selBoard($param));
            $this->addAttribute("js", ["board/detail"]); //스크립트 파일 import
            return "board/detail.php";
        }

        public function del() {
            $i_board = $_GET["i_board"];
            $param = ["i_board" => $i_board];
            $model = new BoardModel();
            $model->delBoard($param);
            return "redirect:/board/list";
        }

        public function write() {
            $model = new BoardModel();
            $this->addAttribute(_TITLE, "Write");
            $this->addAttribute(_HEADER, $this->getView("template/header.php"));
            $this->addAttribute(_MAIN, $this->getView("board/write.php"));
            $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
            return "template/t1.php";
        }

        public function writeProc() {
            $loginUser = $_SESSION["loginUser"];
            $i_user = $loginUser->i_user;
            $title = $_POST["title"];
            $ctnt = $_POST["ctnt"];
        
            $param = [
                "i_user" => $i_user,
                "title" => $title,
                "ctnt" => $ctnt
            ];
            $model = new BoardModel;
            $model->insBoard($param);
            return "redirect:/board/list";
        }

        public function mod() {
            $i_board = $_GET["i_board"];
            $model = new BoardModel();
            $param = ["i_board" => $i_board];
            $this->addAttribute("data", $model->selBoard($param));
            $this->addAttribute(_TITLE, "Edit");
            $this->addAttribute(_HEADER, $this->getView("template/header.php"));
            $this->addAttribute(_MAIN, $this->getView("board/mod.php"));
            $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
            return "template/t1.php";
        }

        public function modProc() {
            $i_board = $_POST["i_board"];
            $title = $_POST["title"];
            $ctnt = $_POST["ctnt"];
            $param = [
                "i_board" => $i_board,
                "title" => $title,
                "ctnt" => $ctnt
            ];
            $model = new BoardModel;
            $model->updBoard($param);
            return "redirect:/board/detail?i_board={$i_board}";
        }

    }