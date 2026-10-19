<?php

require_once "Student.php";

class GraduateStudent extends Student
{
    public $researchpaper;

    public function __construct($name, $age, $id, $course, $researchpaper){
        parent::__construct($name, $age, $id, $course);
        $this->researchpaper = $researchpaper; }

    public function getDetails(){
        echo "Graduate Student" .PHP_EOL;
        echo "Name: " . $this->name . PHP_EOL;
        echo "Age: " . $this->age .PHP_EOL;
        echo "Student ID: " . $this->id .PHP_EOL;
        echo "Course: " . $this->course .PHP_EOL;
        echo "Research Paper: " . $this->researchpaper . PHP_EOL;
    }
}
