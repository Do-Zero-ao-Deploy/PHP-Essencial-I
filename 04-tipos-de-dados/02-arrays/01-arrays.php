<?php

$string = 'Tiago';
$booleanTrue = true;
$booleanFalse = false;
$nulo = null;
$inteiro = 145;
$float = 17.85;
$array = [123, 456, 789];

// -----------------------------

$nome = 'Éris';
$idade = 56;
$casado = true;
$altura = 1.82;
$peso = 120.25;
$algumaCoisa = null;
$emails = [
    'tiago1@mail.com',
    'tiago2@mail.com',
];

$filhos = [
    'Paulo',
    'Elisa',
];


$pessoa1 = [
    'nome' => 'Tiago',
    'idade' => 56,
    'casado' => true,
    'altura' => 1.82,
    'peso' => 120.25,
    'algumaCoisa' => null,
    'emails' => [
        'tiago1@mail.com',
        'tiago2@mail.com',
    ],
    'filhos' => [
        'Paulo',
        'Elisa',
    ],
];


echo 'Esse é o ' . $pessoa1['nome'] . '. Tem '. $pessoa1['idade'] . ' anos';
