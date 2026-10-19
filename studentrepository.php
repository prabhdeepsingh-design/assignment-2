<<?php

require_once "StudentRepositoryInterface.php";
require_once "GraduateStudent.php";

class StudentRepository implements StudentRepositoryInterface
{
    private $students =[];

    public function addStudent($student)
    {
        if (!$student instanceof Student)
             {
            echo "Invalid student object!" .PHP_EOL;
            return;}

        if ($this->findStudent($student->id, false) !== null)
             {
            echo "Student ID already exists!" .PHP_EOL;
            return;
        }

        $this->students[] = $student;
        echo "Student added successfully!" .PHP_EOL;
    }

    public function displayStudents()
    {
        if (empty($this->students)) {
            echo "No students found!" .PHP_EOL;
            return;
        }

        foreach ($this->students as $student) {
            echo PHP_EOL;
            $student->getDetails();
            echo "-------*******------------". PHP_EOL;
        

            }
    }

    public function findStudent($id, $showMessage = true)
    {
        foreach ($this->students as $student) {
            if ((string)$student->id === (string)$id) {
                if ($showMessage) {
                    $student->getDetails();}

                return $student; }
        }

        if ($showMessage) {
            echo "Student not found!" .PHP_EOL;
        }

            return null;
    }

    public function deleteStudent($id)
    {
        foreach ($this->students as $index => $student) {
            if ((string)$student->id === (string)$id){
                unset($this->students[$index]);

                echo "Student deleted successfully!". PHP_EOL;
                return;
           
                }
        }

        echo "Student not found!" .PHP_EOL;
    }
}



/*$gi= new studentrepository();
$gi->addstudent("prabhdeep");
$gi->addstudent("khata");
$gi->addstudent("sidhu");
$gi->addstudent("sandhu");
$gi->displaystudents();
$gi->deleteStudent("sidhu");
$gi->displaystudents();
$gi->findStudent("khata");*/