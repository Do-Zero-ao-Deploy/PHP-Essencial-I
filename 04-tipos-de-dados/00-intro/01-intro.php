<?php

/*
$valor1 = '9.5'; // String
$valor2 = 9.5; // Float|Double

var_export([
    'valor1' => $valor1,
    'valor1_type' => gettype($valor1),
    'valor2' => $valor2,
    'valor2_type' => gettype($valor2),
    'igual' => $valor1 == $valor2,
    'igual_valor_e_tipo' => $valor1 === $valor2,
]);
*/

/*
$nome = 'Tiago';
$peso = 125.21; // Float|Double
$peso = 125; // Int|Integer
$peso = '125'; // String
$peso = "125"; // String
$casado = true; // Boolean
$casado = false; // Boolean
*/

/*
// $idade = "95";
$idade = 95;

var_export([
    'idade' => $idade,
    'idade_type' => gettype($idade),
]);

echo PHP_EOL;

$idade = (string) $idade; // Cast para string
$idade = (int) $idade; // Cast para integer
$idade = (float) $idade; // Cast para float/double
$idade = (bool) $idade; // Cast para boolean

var_export([
    'idade' => $idade,
    'idade_type' => gettype($idade),
]);
*/

var_export([
    'true' => true,
    'true_to_string' => (string) true,
    'true_to_int' => (int) true,
    'true_to_float' => (float) true,
]);

echo PHP_EOL;

var_export([
    'false' => false,
    'false_to_string' => (string) false,
    'false_to_int' => (int) false,
    'false_to_float' => (float) false,
]);

echo PHP_EOL;

var_export([
    '0' => '0',
    'str_0_to_bool' => (bool) '0',
    'str_0_to_int' => (int) '0',
    'str_0_to_float' => (float) '0',
]);

echo PHP_EOL;

var_export([
    '1' => '1',
    'str_1_to_bool' => (bool) '1',
    'str_1_to_int' => (int) '1',
    'str_1_to_float' => (float) '1',
]);
