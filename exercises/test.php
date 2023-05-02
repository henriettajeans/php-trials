<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Jag ska berätta lite om mig:</h2>
    <p>Mitt namn: </p>
    <?php
    $name = "Henrietta";

    $hairColor = "red";

    echo "<p>" . $name . $bio . "</p>"


    ?>
    <p>Ålder: </p>
    <?php
    $age = 28;
    echo "<p>" . $age . "</p>"
    ?>
    <p>Min hårfärg: </p>
    <?php
    $hairColor = "❤️‍🔥🛑🔴";
    echo "<p>" . $hairColor . "</p>"
    ?>
    <p>Lite om mig: </p>
    <?php
    $bio = "I'm a young woman studing web development. I live <br> in Sollentuna with my two cats but we're looking to move.";
    echo "<p>" . $bio . "</p><span> And I'm looking for a girlfriend with a butch energy <br> and hopefully big </span> <h2> boobs</h2>"
    ?>

    <?php
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";

    ?>

    <?php
    echo "<h2> Nu ska jag testa arrayer: </h2>";
    echo "<ol>";
    $arr = array("Henrietta", "Sahra", "Feven", "Manfred", "Cornelia", "Åsa", "Felicia", "Erik");
    echo "<span>Antal namn i listan: " . count($arr) . "</span>";
    foreach ($arr as $arr) {
        echo "<li>" . $arr . "</li>";
    }
    echo "</ol>";

    ?>
    <?php
    $recept = [
        [
            "namn" => "Kladdkaka",
            "tillagning" => 40,
            "beskrivning" => "En kladdig kaka",
            "ingredienser" => [
                "smör till formen", "ströbröd till formen", "100 g  smör", "2 st  ägg", "2 1/2 dl  strösocker", "3 msk  kakao", "2 tsk  vaniljsocker",
                "1 1/2 dl  vetemjöl",
                "1 krm  salt"
            ]
        ],

        [
            "namn" => "Äppelpaj",
            "tillagning" => 20,
            "beskrivning" => "En sommardröm, med vaniljkräm eller glass till",
            "ingredienser" => [
                "ca 800 g  äpplen",
                "1 tsk  kanel",
                "2 tsk  socker",
                "1 krm  flingsalt (viktigt att det är flingsalt som används)",
                "smör till formen"
            ]
        ],
        [
            "namn" => "Tiramisu",
            "tillagning" => 90,
            "beskrivning" => "En grekisk klassiker",
            "ingredienser" => [
                "4   äggulor",
                "2   burkar mascarpone (à 250 g)",
                "1/2 dl  amaretto eller konjak",
                "3   äggvitor",
                "1 dl  socker",
                "20   savoiardikex",
                "1 1/2 dl  kall espresso eller starkt bryggkaffe",
                "kakao att pudra över",
                "färska hallon"
            ]
        ],
    ];
    echo "<h1> Några riktigt goda smaskigheter </h1> " . count($recept) . "<span> st </span>";
    echo "<ul>";

    foreach ($recept as $recept) {
        echo "<h2>" . $recept['namn']  . "<br> </h2>";
        echo "<p> Tillagningstid: " . $recept['tillagning'] . " minuter </p>";
        echo "<p>" . $recept['beskrivning'] . "</p>";
        foreach ($recept['ingredienser'] as $i) {
            echo "<li>" . $i . "</li>";
        }
    };
    echo "</ul>";
    ?>
</body>

</html>