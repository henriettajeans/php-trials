<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frukt.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Neucha&display=swap" rel="stylesheet">

    <title>🍓FRUKT🍇</title>
</head>

<?php
$fruits = ["apple" => '🍎', 'kiwi' => '🥝', 'banana' => '🍌', 'peach' => '🍑', 'grape' => '🍇', 'orange' => '🍊', 'mango' => '🥭', "cherry" => '🍒', "plum" => '🍈', "blueberry" => '🫐', "strawberry" => '🍓', "melon" => '🍉', "pineapple" => '🍍', "pear" => "🍐"];
?>

<body>

    <header class="header-fruit">
        <h1 class="header-fruit__title">Mums, vad gott med fruktsallad!</h1>
    </header>
    <section class="fruit-container">
        <?php
        echo "<h2 class='fruit-container__title'> Vad gott det ska bli med denna blandning: </h2>";
        shuffle($fruits);
        shuffle($f);
        $shufl = array_slice($fruits,  0, 7);

        $moreshufl = array_slice($fruits, 7, 14);

        shuffle($fruits);
        foreach ($shufl as $fruits) {
            echo "<span class='fruit-container__array'> $fruits </span>";
        };
        echo "<h2 class='fruit-container__title'> Nästa gång kan vi väl prova denhär: </h2>";
        shuffle($fruits);
        foreach ($moreshufl as $fruits) {
            echo "<span class='fruit-container__array'> $fruits </span>";
        }
        ?>
    </section>
</body>

</html>