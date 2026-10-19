<?php

interface StudentRepositoryInterface
{
    public function addStudent($student);
    public function displayStudents();
    public function deleteStudent($id);
    public function findStudent($id);
}
