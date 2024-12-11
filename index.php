<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor Ragnarok',
    2021,
    Genero::SuperHeroi,
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);


var_dump($filme);

echo "Média de avaliações: " . $filme->media() . "\n";

$filme2 = new Filme(
    "Moana 2",
    2024,
    Genero::Drama,
);

var_dump($filme2);

echo "Média de avaliações: " . $filme2->media() . "\n";
