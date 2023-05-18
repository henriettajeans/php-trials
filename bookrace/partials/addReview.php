<?php

// upptäck error i koden med dessa rader:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './classes/bookModel.php';
$bookModel = new BookModel(connect($host, $db, $user, $password));
?>

<h1>Formulär</h1>

<!-- Någonstans i denna kod sker ett error som gör att inget renderas -->

<form action="form-handler/addReviewHandler.php" method="post">
    <div>
        <label for="title">Välj titel:</label>
        <select name="Books-id" id="Books">
            <option value="">--Välj bok att recensera--</option>

            <?php
            $books = $bookModel->getAllBooks();
            foreach ($books as $book) {
                echo "<option value='{$book['id']}'>
                            {$book['title']}
                            ({$book['pages']} sidor)
                        </option>";
            }
            ?>
    </div>
    <div>
        <label for="review">Recension:</label>
        <input type="text" name="review" id="review">
    </div>
    <button type="submit">Lägg till recension</button>
</form>