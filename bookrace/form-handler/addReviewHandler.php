<?php

require '../classes/reviewModel.php';
$reviewModel = new ReviewModel((require '../partials/connect.php'));


if (isset($_POST['title'], $_POST['student'], $_POST['review'])) {
    $title = $_POST('title');
    $student = $_POST('student');
    $review = $_POST('review');

    $reviewModel->addReview($title, $student, $review);
}
