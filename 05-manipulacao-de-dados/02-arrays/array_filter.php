<?php

$nomes = [
    'Tiago',
    'Tadeu',
    'André',
    'Marcos',
    'Matias',
    'Estevão',
    '',
    null,
    false,
    [],
    0,
    '0',
    1,
    -5,
    true,
    [1343],
];

// $nomesFiltrados = array_filter($nomes); // Traz apenas os valores 'não falso'
// $nomesFiltrados = array_filter($nomes, 'is_string'); // Traz apenas as strings
$nomesFiltrados = array_filter($nomes, function($valor) {
    return $valor && is_string($valor); // Traz apenas as strings cujo valor é um 'não falso'
});

// var_export($nomesFiltrados);

$nomesIniciadosComT = array_filter($nomesFiltrados, function($valor) {
    return str_starts_with($valor, 'T'); // Retorna apenas nomes que começam com a letra T maiuscula
});
// var_export($nomesIniciadosComT);

$nomesQueTenhaT = array_filter($nomesFiltrados, function($valor) {
    return str_contains($valor, 't'); // Retorna apenas nomes que tenham a letra 't' minuscula
});
// var_export($nomesQueTenhaT);

$nomesQueTenhaT = array_filter($nomesFiltrados, function($valor) {
    return str_contains(strtolower($valor), 't'); // Retorna apenas nomes que tenham a letra 't' independente se maiuscula ou minuscula
});
var_export($nomesQueTenhaT);

// var_export([
//     boolval('Estevão'), // true
//     boolval(''), // false
//     boolval(null), // false
//     boolval(false), // false
//     boolval([]), // false
//     boolval(0), // false
//     boolval(1), // true
//     boolval(-5), // true
//     boolval(true), // true
//     boolval([1343]), // true
// ]);

// Modos
// 0 = valor;
// ARRAY_FILTER_USE_KEY (2) apenas por chave
// ARRAY_FILTER_USE_BOTH (1) por ambos (chave e valor)

$pessoa = [
    'nome' => 'Tiago',
    'idade' => 50,
    'telefone_1' => '9999',
    'telefone_2' => '9998',
    'email_1' => 'abc1@site.com',
    'email_2' => 'abc2@site.com',
];
