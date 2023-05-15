<?php
require 'classes/db.php';
$pdo = require 'partials/connect.php';

$db = new DB($pdo);

include 'partials/header.php';

$users = $db->getAll("StudentUser");
echo "<ul> Listan:";
foreach ($users as $user) {

    echo "<li> {$user['Name']} </li>";
}
echo "</ul>";

include 'partials/footer.php';
