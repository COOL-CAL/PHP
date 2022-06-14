<?php
    class Student {
        private $studentId; //은닉화(캡슐화)
        private $studentName;
        //상수만 public 가능
        //const as static in php
    
        //private 멤버필드에 값 넣을 수 있는 2가지 방법 : 1) setter , 2) 생성자함수
        //private 멤버필드에 값 뺄 수 있는 1가지 방법 : 1) getter
        //getters(private 안에 있는 값 꺼내오기)
        public function getStudentId() {
            //get+변수명(앞자리만 대문자)+ 메소드이기 때문에 ()+ 파라미터 없이 리턴해서 받아온 값 넣어줌
            return $this->studentId;
        }
        //setters(private 안에 값 넣어주기)
        public function setStudentId($studentId) {
            //set+변수명+외부에서 들어오는 값 저장해야하기 때문에 파라미터 필요+ 변수에 받아온 값 저장
            $this->studentId = $studentId;
            return $this; //$this: 나 자신에게서 받아온 주소값
        }

        public function getStudentName() {
            return $this->studentName;
        }

        public function setStudentName($studentName) {
            $this->studentName = $studentName;
            return $this;
        }

        // public function printStudent() {
        //     print "ID : {$this->studentId}<br>";
        //     print "Name : {$this->studentName}<br>";
        // }
    }

    $obj = new Student;
    print "first : ".$obj->setStudentId(1222)->getStudentId(). "<br>";

    $obj2 = new Student;
    print $obj2->setStudentId(8888)->getStudentId(). "<br>"; //set->get 이어서 쓰기 위해 $this 리턴 해야함
    print "second : " .$obj->getStudentId() . "<br>";
    //          $obj와 같은 주소값
    // $obj->setStudentId(1222);
    // $obj->setStudentName("hong");
    // $obj->printStudent();
