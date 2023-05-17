<?php

class ReviewView
{
    public function renderAllReviewsAsList(array $reviews): void
    {
        echo "<ul>";
        foreach ($reviews as $review) {
            echo "<li>{$review['title']}  (recenserad av {$review['student']}) <br> Recension: {$review['review']} </li>";
        }
        echo "</ul>";
    }
}
