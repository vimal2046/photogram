
<?php

class Student{

    public $name;
    public $rollNumber;

    public function __construct($name, $rollNumber){
        $this->name = $name;
        $this->rollNumber =$rollNumber;
    }

    public function getProfile(){
        return "Student Name:".$this->name .", Roll Number:" .$this->rollNumber;
    }
}

$student1 = new Student("vimalchandar","cs328");

echo $student1->getProfile();