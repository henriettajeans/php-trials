<?php

class BookModel extends DB
{
    protected $table = "Books";

    public function gettAllBooks()
    {
        return $this->getAll($this->table);
    }
}
