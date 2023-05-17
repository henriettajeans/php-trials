<?php
require 'classes/db.php';
$pdo = require 'partials/connect.php';

$db = new DB($pdo);
include 'partials/header.php';
include 'partials/nav.php';


echo "<h1>Lägg till en recension</h1>";

//Efter denna rad syns inget vidare i webbläsaren ->

include 'partials/addReview.php';


include 'partials/footer.php';
