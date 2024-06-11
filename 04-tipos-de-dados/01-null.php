<?php

$nome = null; // null
$nome = 'Tiago';
$nome = ''; // Vazio/empty

$nome = is_null($nome) ? 'Sem nome' : $nome;
$nome = $nome === null ? 'Sem nome' : $nome;
$nome = $nome ?? 'Sem nome';
$nome ??= 'Sem nome';

// echo $nome;

$pessoa = [
    'nome' => 'Tiago França',
    'email' => 'tiago@mail.com',
];

// echo $pessoa['telefone'] ?? null;

// $dataDeNasc = null;
// echo $dataDeNasc ?? 'Sem valor'; // null coalesce

// $item = null;
// echo is_null($item) ? 'é nulo' : 'não é nulo';

// $item = 0; // 0, false, '', [], "", null
// echo empty($item) ? 'é vazio' : 'não é vazio';
