<?php
abstract class person{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    
    abstract public function getdetails();

}

