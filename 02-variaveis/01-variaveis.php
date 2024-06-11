<?php

$nome = 'Tiago';
$abc = 123;

echo $nome . PHP_EOL;

// echo '\n';
// echo "\n";
// echo PHP_EOL;

$nome = 'Paulo';

echo $nome . PHP_EOL;

$idade = 19;

if (!isset($idade)) {
    $idade = 12;
}

echo $idade . PHP_EOL;

$sexo = 'f';

// $sexo = isset($sexo) ? $sexo : 'm';
$sexo = $sexo ?? 'm';

echo $sexo . PHP_EOL;
