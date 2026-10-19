<?php

require_once "Student.php";
      require_once "GraduateStudent.php";
require_once "StudentRepository.php";

$repository =new StudentRepository();

while (true)
    {
    echo PHP_EOL;
    echo "=== STUDENT MANAGEMENT SYSTEM ===" .PHP_EOL;
    echo "1. Add Regular Student" . PHP_EOL;
    echo "2. Add Graduate Student" .PHP_EOL;
    echo "3. View All Students" . PHP_EOL;
    echo "4. Search Student" .PHP_EOL;
    echo "5. Delete Student" .PHP_EOL;
    echo "6. Exit" . PHP_EOL;
    echo "Enter your choice: ";

    $choice = trim(fgets(STDIN));

    switch ($choice)
     {
        case "1":
            echo "Enter name: ";
            $name = trim(fgets(STDIN));

            echo "Enter age: ";
            $age = (int) trim(fgets(STDIN));

            echo "Enter student ID: ";
            $id = trim(fgets(STDIN));

            echo "Enter course: ";
            $course = trim(fgets(STDIN));

            $student = new Student($name, $age, $id, $course);
            $repository->addStudent($student);
            break;

        case "2":
            echo "Enter name: ";
            $name = trim(fgets(STDIN));

            echo "Enter age: ";
            $age = (int) trim(fgets(STDIN));

            echo "Enter student ID: ";
            $id = trim(fgets(STDIN));

            echo "Enter course: ";
            $course = trim(fgets(STDIN));

            echo "Enter research paper title: ";
            $researchpaper = trim(fgets(STDIN));

            $graduateStudent = new GraduateStudent($name,$age,$id,$course,$researchpaper);

            $repository->addStudent($graduateStudent);
            break;

        case "3":
            $repository->displayStudents();
            break;

        case "4":
            echo "Enter student ID to search: ";
            $id = trim(fgets(STDIN));
            $repository->findStudent($id);
            break;

        case "5":
            echo "Enter student ID to delete: ";
            $id = trim(fgets(STDIN));
            $repository->deleteStudent($id);
            break;
        case "6":
            echo "Exiting application. Goodbye!" . PHP_EOL;
            exit;
        default:
            echo "Invalid choice! Try again." . PHP_EOL;
   
   
              }
}

/*class Animal {
    public function sound() {
        echo "Animal sound" . PHP_EOL;
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Bark" . PHP_EOL;
    }
}

class Cat extends Animal {
    public function sound() {
        echo "Meow" . PHP_EOL;
    }
}
function makeSound(Animal $animal) {
    $animal->sound();
}


makeSound(new Dog());
makeSound(new Cat());
makeSound(new Animal());*/
















/*class  person{
   public $name;

}
class student extends person{
     public $crn;
}
class graduatestudent extends student{
    public $researchpaper;
}

$g1=new graduatestudent();
$g1->researchpaper="the";
$g1->crn=76;
$g1->name="prabhdeep";
echo $g1->researchpaper;
echo $g1->crn;
echo $g1->name;










// interface

interface product{
    public function images();
    public function details();
}
class p implements product{
    public function images(){
        echo "prabh";

    }
    public function details(){
        echo "singh";

    }

}
$g=new p();
$g->details();
//absract
abstract class BaseController {
    abstract function free();
      
    

}
class papu extends BaseController{
    function p()
{
    echo "print";
}
function free(){

}
}
$OBJ=new papu();
$OBJ->p();*/

?>