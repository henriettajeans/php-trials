<?php

class BookView
{

    public function renderAllBooksAsList(array $Books): void
    {
        echo "<ul>";
        foreach ($Books as $book) {
            echo "<li>{$book['title']} <br> ({$book['author']}) <br> Sidor: {$book['pages']} </li>";
        }
        echo "</ul>";
    }
}
