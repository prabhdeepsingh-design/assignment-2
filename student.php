<?php

require_once "Person.php";

class Student extends Person
{
    public $id;
    public $course;

    public function __construct($name, $age, $id, $course)
    {
        parent::__construct($name, $age);

        $this->id = $id;
        $this->course = $course;
    }

    public function getDetails()
    {
        echo "Regular Student" . PHP_EOL;
        echo "Name: " . $this->name . PHP_EOL;
        echo "Age: " . $this->age . PHP_EOL;
        echo "Student ID: " . $this->id . PHP_EOL;
        echo "Course: " . $this->course . PHP_EOL;
    }
}
