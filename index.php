<?php

echo "Bem-vindo(a) ao ScreenMatch\n";

require __DIR__ . "/src/Modelo/Filme.php";

$filme = new Filme();
$filme->setNome('Thor Ragnarok');
$filme->setAnoLancamento(2021);
$filme->setGenero('super-heroi');

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);


$filme->SetAnoLancamento(2024);

var_dump($filme);

echo $filme->media();