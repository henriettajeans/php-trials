<!-- Ett nytt försök på att skicka in ett formulär till databasen, startat från grunden med samma
metoder eller nya som addReview.php -->

<h4>2. Ett till formulär för att skriva en recension</h4>

<form action="form-handler/addReviewHandler.php" method="post">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="student">Student:</label>
        <select name="student-id" id="student">
            <option value="">--Välj student--</option>



        </select>
    </div>
    <div>
        <label for="review">Recension: </label>
        <input type="text" name="review" id="review">
    </div>
    <button type="submit">Add book</button>
</form>