<?php

require_once 'db.php';

class ReviewModel extends DB
{
    protected $table = "review";

    public function getAllReviews()
    {
        return $this->getAll($this->table);
    }
    public function addReview($title, $student, $review)
    {
        $sql = "INSERT INTO $this->table ('title', 'student', 'review') VALUES (?, ? , ?,)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$title, $student, $review]);
    }
}
