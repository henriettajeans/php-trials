<?php

// spindeln i nätet... Controller, tänk den del som "styr"... app

// book-view
// review-view

require 'classes/db.php';
// book dvs id, title, author
// review (innan userbook) dvs id, user_id, book_id, review_text, pages

$pdo = require 'partials/connection.php';

$db = new DB($pdo);

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här

echo "<ul>";
$plans = $db->getAll("todos");
foreach ($plans as $plan) {
    echo "<li> {$plan['Title']} </li>";
}
echo "</ul>";

// gör om för tre tabeller!

include 'partials/footer.php';
