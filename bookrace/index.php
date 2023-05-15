<?php
require 'classes/db.php';
$pdo = require 'partials/connect.php';

$db = new DB($pdo);

include 'partials/header.php';

echo "<p>hello wooooorld</p>";


echo "<ul> Listan:";
$users = $db->getAll("StudentUser");
foreach ($users as $user) {
    echo "<li> {$user['Name']} </li>";
}
echo "</ul>";
