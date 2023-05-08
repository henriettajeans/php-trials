<?php
$parameter = 12;
$greeting = "Hello";
$input = "Henrietta";

function param($parameter, $greeting, $input)
{
    echo $parameter + 5;
    $input = "Sahra";

    echo "<h1> $greeting $input </h1>";
    return;
}
// echo $input;

echo $parameter . "<br>";
echo param($parameter, $greeting, $input);

echo $input;
