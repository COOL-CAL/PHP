<?php
    //접근제어 지시자 (접근 지시어, 접근 제어자)
    //Access Modifier
    //key word: public, protected, private
    class Student {
        private $studentId;
        private $studentName;
    // 상수만 public 가능
        public function printStudent() {
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }
    }

    $obj = new Student;
    $obj->printStudent(1717177, "Hong");
    //     메소드 호출
