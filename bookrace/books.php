<?php
require 'classes/db.php';
require 'classes/bookView.php';

require 'classes/bookModel.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$bookModel = new BookModel($pdo);
$bookView = new BookView();



include 'partials/header.php';
include 'partials/nav.php';


echo "<h3> Här finns böckerna ni kan välja bland:</h3>";
$bookView->renderAllBooksAsList($bookModel->getAllBooks());



include 'partials/footer.php';
