<?php

$nomes = [
    'Mateus',
    'Marcos',
    'Lucas',
    'João',
    'Paulo',
];

$nome = 'Paulo';

$resultado = in_array($nome, $nomes);

// var_export($resultado);


$anos = [
    2000, // Int
    2004, // Int
    2008, // Int
    2012, // Int
    2014, // Int
    2016, // Int
    '2018', // String
    "2020", // String
];

$ano = 2018; // Int

2018 == '2018'; // True
2018 === '2018'; // False

$resultado = in_array($ano, $anos);
var_export($resultado);
echo PHP_EOL;
$resultado = in_array($ano, $anos, true);

var_export($resultado);
// var_export(gettype(2018));
echo PHP_EOL;
// var_export(gettype('2018'));
