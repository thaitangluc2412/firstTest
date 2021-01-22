<?php
class Entity_Student
{
    public $id;
    public $name;
    public $age;
    public $university;
    public $faculty;
    public function __construct($_id, $_name, $_age, $_university, $_faculty)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->age = $_age;
        $this->university = $_university;
        $this->faculty = $_faculty;
    }
}
