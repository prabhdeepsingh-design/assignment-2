<?php
require_once "StudentRepositoryInterface.php";
require_once "student.php";
require_once "GraduateStudent.php";
class StudentRepository implements StudentRepositoryInterface
{
    private $students = [];
    public function addStudent($detailsofstudent)
    {
        foreach ($this->students as $s) {
            if ($s->id == $detailsofstudent->id) {
                echo "USER ALREADY EXITS.......!" . PHP_EOL;
                return;
            }
        }
        $this->students[] = $detailsofstudent;
        echo "STUDENT ADDED SUCESSFULLY....!" . PHP_EOL;
    }
    public function displayStudents()
    {

        if (empty($this->students)) {
            echo "No RECORDS ARE THERE.....!";
        } else {
            foreach ($this->students as $student) {
                $student->getdetails();
            }
        }
    }
    public function findstudent($id)
    {
        foreach ($this->students as  $st) {
            if ($st->id == $id) {
                $st->getdetails();
                return;
            }
        }
        echo "USER ID IS NOT FOUND...!";
    }
    public function deletestudent($id){
        foreach($this->students as $index=> $st){
           if ($st->id==$id){
            unset($this->students[$index]);
            echo "STUDENT DELETED".PHP_EOL;
            return;

           }
        }
        echo "STUDENT NOT FOUND...!".PHP_EOL;
    }



}
