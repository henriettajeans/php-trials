<?php
require_once '../classes/studentModel.php';
require_once '../classes/bookModel.php';
require_once '../classes/reviewModel.php';

$studentModel = new StudentModel(connect($host, $db, $user, $password));
$reviewModel = new ReviewModel(connect($host, $db, $user, $password));
$bookModel = new BookModel(connect($host, $db, $user, $password));
?>

<!-- Någonstans i denna kod sker ett error som gör att inget renderas -->

<section>
    <form action="form-handler/addReviewHandler.php" method="post">
        <article>
            <label for="title">Välj titel:</label>
            <select name="Books-id" id="title">
                <option value="">--Välj bok att recensera--</option>

                <?php
                $books = $bookModel->gettAllBooks();
                foreach ($books as $book) {
                    echo "<option value='{$author['id']}'>
                            {$book['title']} ({$book['pages']} sidor)
                        </option>";
                }
                ?>
        </article>
        <article>
            <label for="StudentUser-id" id="Name">Student:</label>
            <option value="">---Välj student---</option>
            <?php
            $students = $studentModel->gettAllStudents();
            foreach ($StudentUser as $student) {
                echo "<option value='{$student['id']}'>
                    {$student['Name']}
                </option>";
            }
            ?>
        </article>
        <article>
            <label for="review">Recension:</label><input type="text" name="review" id="review">
        </article>
        <button type="submit">Lägg till recension</button>
    </form>
</section>