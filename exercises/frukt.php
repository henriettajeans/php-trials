<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$fruits = ["apple" => '🍎', 'kiwi' => '🥝', 'banana' => '🍌', 'peach' => '🍑', 'grape' => '🍇', 'orange' => '🍊', 'mango' => '🥭', "cherry" => '🍒', "plum" => '🍈', "blueberry" => '🫐', "strawberry" => '🍓', "melon" => '🍉', "pineapple" => '🍍', "pear" => "🍐"];
?>
<?php
$f = array("🍍", "🍑", "🍊", "🍐", "🥝");
echo (array_slice($f, 0, 4));
?>

<body>
    <header class="header-container">
        <h1 class="header-container__title">Mums, vad gott med fruktsallad!</h1>
    </header>
    <section class="php-container">
        <?php
        echo "<h2 class='php-container__title'> Vad gott det ska bli med denna blandning: </h2>";
        shuffle($fruits);
        shuffle($f);
        $shufl = array_slice($fruits,  0, 6);

        foreach ($f as $frukt) {;
            echo  "<span class='php-container__array'> $frukt </span>";
        };
        echo "<h2 class='php-container__title'> Nästa gång kan vi väl prova denhär: </h2>";
        shuffle($fruits);
        foreach ($shufl as $fruits) {
            echo "<span class='php-container__array'> $fruits <span>";
        }
        ?>
    </section>
</body>

</html>