<?php

$nomes = [
    'Éris',
    'Paulo',
    'Tiago',
];

$nomes[] = 'Maria';
$nomes[] = 'Elisa';
$nomes[15] = 'Pedro';
$nomes[] = 'João';
$nomes[] = 'Guilherme';

// echo $nomes[3] ?? '----';

// var_export($nomes);













$pessoa = [
    'nome' => 'Tiago',
    'sexo' => 'm',
];

$pessoa['cnh'] = 'AB';
$pessoa['cnh'] = 'D';

// var_export($pessoa);

// echo $pessoa['sexo'];



$veiculo = [
    'marca' => 'Chevrolet',
    'modelo' => 'Celta',
    'ano' => 2014,
];

$extras = [
    'ar-condicionado' => 'sim',
    'vidro-eletrico' => 'sim',
    'trava-eletrica' => 'sim',
];

// $veiculo['ar-condicionado'] = 'sim';
// $veiculo['vidro-eletrico'] = 'sim';
// $veiculo['trava-eletrica'] = 'sim';

$veiculo = array_merge(
    $veiculo,
    $extras,
    [
        'som' => 'sim',
    ],
);

var_export($veiculo);

echo PHP_EOL . '--------------' . PHP_EOL;

unset(
    $veiculo['ano'],
    $veiculo['marca'],
    $veiculo['banco-de-couro'],
);

// var_export($veiculo);




$comida = [
    'tipo' => 'fruta',
    'origem' => 'brasil',
    // 'subtipo' => 'citrica',
    'subtipo' => null,
];

$extras = [
    'subtipo' => 'aquosa',
    'cor' => 'verde',
    'numeros' => [
        1,
        2,
        3 => 'algum valor aqui',
    ],
];

// $comida = array_merge($extras, $comida);
// $comida = array_merge($comida, $extras);
// $comida = $extras + $comida;
$comida = $comida + $extras;

var_export($comida);
