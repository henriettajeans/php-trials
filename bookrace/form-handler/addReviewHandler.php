<?php


require '../classes/reviewModel.php';
$reviewModel = new ReviewModel(require '../partials/connect.php');


if (isset($_POST['title'], $_POST['student'], $_POST['review'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $student = filter_var($_POST['student'], FILTER_SANITIZE_SPECIAL_CHARS);
    $review = filter_var($_POST['review'], FILTER_SANITIZE_SPECIAL_CHARS);

    $reviewModel->addReview($title, $student, $review);
}
header("Location: ../reviews.php");
