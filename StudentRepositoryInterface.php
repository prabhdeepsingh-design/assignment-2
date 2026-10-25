<?php
interface StudentRepositoryInterface
{
    public function addStudent($detailsofstudent);
    public function displayStudents();
    public function deletestudent($id);
    public function findstudent($id);
}