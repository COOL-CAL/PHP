<?php
    //접근제어 지시자 (접근 지시어, 접근 제어자)
    //Access Modifier
    //key word: public, protected, private
    class Student {
        public $studentId;
        public $studentName;

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";
        }
    }

    $obj = new Student;
    $obj->studentId = 20171234;
    $obj->studentName = "Alice";
    // . 대신 -> 사용

    $obj->printStudent($obj->studentId, $obj->studentName);
    //     메소드 호출

    // 객체: 메소드 있음 (more flexible)
    // 배열: 메소드, 접근 지시어 없음