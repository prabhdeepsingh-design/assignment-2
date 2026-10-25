<?php
require_once "person.php";
class student extends person{
    public $id;
    public $course;
     public function __construct($name,$age,$id,$course){
        $this->id=$id;
        $this->course=$course;
        parent::__construct($name,$age);
    }
    public function getdetails(){
       // echo "Regular Student" . PHP_EOL;
        echo "Name: " . $this->name . PHP_EOL;
        echo "Age: " . $this->age . PHP_EOL;
        echo "Student ID: " . $this->id . PHP_EOL;
        echo "Course: " . $this->course . PHP_EOL;
        echo "-------------------------" .  PHP_EOL;


    }

  
}
