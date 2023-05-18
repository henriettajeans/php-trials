<?php
require 'classes/db.php';

require 'classes/reviewView.php';
require 'classes/reviewModel.php';

$pdo = require 'partials/connect.php';

$reviewModel = new ReviewModel($pdo);
$reviewView = new ReviewView();

$db = new DB($pdo);
include 'partials/header.php';
include 'partials/nav.php';


echo "<h1>Lägg till en recension</h1>";

//Efter denna rad syns inget vidare i webbläsaren eller i inspekteraren ->

$reviewView->renderAllReviewsAsList($reviewModel->getAllReviews());

//Formulär där man kan välja student och bok att recensera i en drop down meny, och sen skriva 
//sin recension i ett input-fält ->

include 'partials/anotherReview.php';

include 'partials/addReview.php';

include 'partials/footer.php';
