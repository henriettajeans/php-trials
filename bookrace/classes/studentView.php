<?php

class StudentView
{

    public function renderAllUsersAsList(array $StudentUser): void
    {
        echo "<ul>";
        foreach ($StudentUser as $user) {
            echo "<li>{$user['Name']}  (Klass {$user['Class']})</li>";
        }
        echo "</ul>";
    }
}
