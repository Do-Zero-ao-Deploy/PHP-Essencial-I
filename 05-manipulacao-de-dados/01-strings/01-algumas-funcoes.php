<?php

$nome = '      Antônio           '; // Tiago

echo "Original: |{$nome}|";

echo str_repeat(PHP_EOL, 3);

// ucfirst (upper case first) -> Deixa a primeira letra em caixa alta
// lcfirst (lower case first) -> Deixa a primeira letra em caixa baixa
// strtolower (string to lower case) -> Deixa todas as letras em caixa baixa
// strtoupper (string to upper case) -> Deixa todas as letras em caixa alta
// strlen (string length) -> Conta quantos caracteres uma string tem
// trim -> Limpa os espaços (ou outro caractere informado) de uma string

$nome = trim($nome);

echo "Modificado: |{$nome}|";
$totalDeCaracteres = strlen($nome);
echo str_repeat(PHP_EOL, 3);
echo "Total de caracteres: {$totalDeCaracteres}";


















echo str_repeat(PHP_EOL, 20);
