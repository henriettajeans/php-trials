<?php

require_once 'db.php';

class StudentModel extends DB
{
    protected $table = "StudentUser";

    public function getAllStudents()
    {
        return $this->getAll($this->table);
    }
}
