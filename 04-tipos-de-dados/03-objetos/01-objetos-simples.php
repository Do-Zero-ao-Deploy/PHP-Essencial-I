<?php

$pessoa = (object) [
    'nome' => 'Paulo',
    'idade' => 2,
    'sexo' => 'm',
];

// $pessoa['email'] = 'paulo@paulo.com';
$pessoa->email = 'paulo@paulo.com';

// echo $pessoa['sexo'];
// echo $pessoa['email'];
// echo $pessoa->email;









$pessoa = new stdClass();
$pessoa->nome = 'Paulo';
$pessoa->idade = 2;
$pessoa->sexo = 'm';
$pessoa->email = 'paulo@paulo.com';

// echo 'nome: ' . $pessoa->nome . '<br>';
// echo 'idade: ' . $pessoa->idade . '<br>';
// echo 'sexo: ' . $pessoa->sexo . '<br>';
// echo 'email: ' . $pessoa->email . '<br>';








$pessoa = [
    'nome' => 'Paulo',
    'idade' => 2,
    'sexo' => 'm',
    'pais' => [
        'pai' => [
            'nome' => 'Tiago',
        ],
        'mae' => [
            'nome' => 'Éris',
        ],
    ],
];

$pessoa = json_decode(json_encode($pessoa));

var_dump($pessoa);

echo '<br>';
// echo $pessoa->pais['pai']['nome'];
// echo $pessoa?->pais?->pai?->nome;
echo $pessoa->pais->pai->nome;
