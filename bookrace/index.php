<?php
require 'classes/db.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);

include 'partials/header.php';
include 'partials/nav.php';



include 'partials/footer.php';
