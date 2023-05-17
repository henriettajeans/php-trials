<?php

class ReviewView
{
    public function renderAllReviewsAsList(array $review): void
    {
        echo "<ul>";
        foreach ($review as $review) {
            echo "<li>{$review['title']}  ({$review['student']}) <br> Sidor: {$review['review']} </li>";
        }
        echo "</ul>";
    }
}
