<?php
    class People {
        protected $name;
        protected $age;

        function printPeople() {
            print "Name : " . $this->name . "<br>";
            print "Age : " . $this->age . "<br>";
        }
    }

    //extends: 상속 키워드 (just 참조, 가지는 건 아님)
    //위로 갈 수록 추상적, 내려갈 수록 상세해짐
    //ex) 동물 <- 포유류 <- 고양이과 <- 사자 / 호랑이
    class Student extends People { //student가 people을 참조함
        private $studentId;

        function __construct($name, $age, $studentId) {
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $studentId;
        }
        function printStudent() {
            print "- Student - <br>";
            $this->printPeople();
            print "Id : " . $this->studentId . "<br>";
        }
    }

    $stu1 = new Student("Hong", 21, 1010);
    $stu1->printPeople();
    print "----------------";
    $stu1->printStudent();

    class Professor extends People {
        private $office_No;

        function __construct($name, $age, $no) {
            $this->name = $name;
            $this->age = $age;
            $this->office_No = $no;
        }
        function printProfessor() {
            print "- Professor - <br>";
            $this->printPeople();
            print "Office_No : " . $this->office_No . "<br>";
        }
    }

    class Staff extends People {
        private $title;

        function __construct($name, $age, $title) {
            $this->name = $name;
            $this->age = $age;
            $this->title = $title;
        }
        function printStaff() {
            print "-Staff - <br>";
            $this->printPeople();
            print "Title : {$this->title} <br>";
        }
    }