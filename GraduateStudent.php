<?php
require_once "student.php";
class GraduateStudent extends student{
    public $researchPaper;
    public function __construct($name, $age, $id, $course,$researchPaper){
    $this->researchPaper = $researchPaper ;    
    parent::__construct($name, $age, $id, $course);

        
    }
    public function getdetails(){
         
        //parent ::getdetails();
        echo "Name: " . $this->name . PHP_EOL;
        echo "Age: " . $this->age . PHP_EOL;
        echo "Student ID: " . $this->id . PHP_EOL;
        echo "Course: " . $this->course . PHP_EOL;
       // echo "-------------------------" .  PHP_EOL;
        echo "researchPaper " . $this->researchPaper . PHP_EOL;
        echo "-------------------------" .  PHP_EOL;
    }
}