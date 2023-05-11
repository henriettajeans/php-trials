
<?php $random = new \Random\Randomizer();
$fruits = ['red' => '🍓', 'orange' => '🍊', 'green' => '🍐', "purple" => '🍇', "yellow" => '🍌'];

echo "<h1> Mums, vad gott med </h2>";

echo "Min första fruktsallad: ", implode(', ', $random->shuffleArray($fruits)), "\n";
echo "Another fruit salad: ", implode(', ', $random->shuffleArray($fruits)), "\n";


?>
