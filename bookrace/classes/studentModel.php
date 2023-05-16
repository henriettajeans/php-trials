<?php

class StudentModel extends DB
{
    protected $table = "StudentUser";

    public function gettAllStudents()
    {
        return $this->getAll($this->table);
    }
}
