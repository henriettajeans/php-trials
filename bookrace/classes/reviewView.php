<?php

class ReviewView
{
    public function renderAllReviewsAsList(array $review): void
    {
        echo "<ul>";
        foreach ($review as $review) {
            echo "<li>{$review['title']}  ({$review['user']}) <br> Sidor: {$review['review']} </li>";
        }
        echo "</ul>";
    }
}
