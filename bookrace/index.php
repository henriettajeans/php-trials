<?php
require 'classes/db.php';
require 'classes/studentView.php';
require 'classes/bookView.php';

require 'classes/studentModel.php';
require 'classes/bookModel.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$userModel = new StudentModel($pdo);
$userView = new StudentView();
$bookModel = new BookModel($pdo);
$bookView = new BookView();



include 'partials/header.php';

$userView->renderAllUsersAsList($userModel->gettAllStudents());


echo "<h3> Här finns böckerna ni kan välja bland:</h3>";
$bookView->renderAllBooksAsList($bookModel->gettAllBooks());



include 'partials/footer.php';
