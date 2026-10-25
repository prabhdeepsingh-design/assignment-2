<?php
require_once "GraduateStudent.php";
require_once "student.php";
require_once "StudentRepository.php";
$Repository = new StudentRepository();

//$p1= new  student("prabh",21,101,"ece");
//$p2 = new student("khata",21,102,"IT");
function rdetail(){
    
    $n=trim(readline("enter yourn name : "));
    $a=trim(readline("enter yourn age : "));
    $i=trim(readline("enter yourn id : "));
    $c=trim(readline("enter yourn course : "));
    
    $s1= new student($n,$a,$i,$c);
    return($s1);
}
function gdetail(){
    
    $n=trim(readline("enter  name : "));
    $a=trim(readline("enter  age : "));
    $i=trim(readline("enter  id : "));
    $c=trim(readline("enter  course : "));
    $r=trim(readline("enter research paper : "));
    
    $r1= new GraduateStudent($n,$a,$i,$c,$r);
    return($r1);
}




//$g1 = new GraduateStudent(
//    "Aman",
 //   22,
//    201,
 //   "ECE",
//    "AI in Healthcare"
//);

//$g1->getdetails();
//$Repository->addStudent(detail());
//$Repository->displayStudents();



$choice=0;
while($choice!=6){
    echo "1. Regular student" . PHP_EOL;
    echo "2. Graduate student" . PHP_EOL;
    echo "3. Display Students" . PHP_EOL;
    echo "4. Find Student" . PHP_EOL;
    echo "5. Delete Student" . PHP_EOL;
    echo "6. Exit" . PHP_EOL;
    $choice=readline("ENTER YOUR CHOICE : ");

    if ($choice==1){
        $Repository->addstudent(rdetail());

    }
    elseif ($choice==2){
        $Repository->addstudent(gdetail());

    }
    elseif($choice==3){
        $Repository->displayStudents();

    }
    elseif($choice==4){
        $p=trim(readline("ENTER THE ID OF STUDENT YOU WANT TO FIND : "));
        $Repository->findstudent($p);

    }
    elseif($choice==5){
        $q=trim(readline("ENTER THE ID OF STUDENT YOU WANT TO DELETE : "));
        $Repository->deletestudent($q);
     }
     elseif($choice==6){
        echo "EXITING THE PROGRAM.............".PHP_EOL;
    
    }else{
        echo "Wrong selection try again by re-run the code ".PHP_EOL;
     }
  
}



/*
$Repository->addStudent($p2);
echo "finding student............................................".PHP_EOL;
$Repository->findstudent(101);

echo "deleting student............................................".PHP_EOL;
$Repository->deletestudent(101);

echo "displaying students............................................".PHP_EOL;


$Repository->displayStudents();


echo "searchin\g studnt students............................................".PHP_EOL;
$Repository->findstudent(99);
*/