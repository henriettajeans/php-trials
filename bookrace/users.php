<?php
require 'classes/db.php';
require 'classes/studentView.php';

require 'classes/studentModel.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$userModel = new StudentModel($pdo);
$userView = new StudentView();


include 'partials/header.php';
include 'partials/nav.php';

echo "<h2>Lista över studerna som deltar:</h2>";

$userView->renderAllUsersAsList($userModel->gettAllStudents());



include 'partials/footer.php';
