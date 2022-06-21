<?php
namespace application\controllers; //이게 없으면 파일 경로로 적어줘야 함.

abstract class Controller {
    public function __construct($action) {        
        $view = $this->$action();
        require_once $this->getView($view); 
    }
    
    protected function addAttribute($key, $val) {
        $this->$key = $val;
    }

    protected function getView($view) {
        if(strpos($view, "redirect:") === 0) { //strpos : string position
            header("Location: http://" . _HOST . substr($view, 9));
            return;
        }
        return _VIEW . $view; // $도 없고(변수) 문자열 쌍따옴표도 없으면 상수(_VIEW)
    }
}

