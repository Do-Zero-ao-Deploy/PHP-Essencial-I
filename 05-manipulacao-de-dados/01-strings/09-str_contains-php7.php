<?php

echo 'PHP_VERSION: ' . PHP_VERSION . PHP_EOL;

if (!function_exists('str_contains')) {
    function str_contains(string $string, string $check) {
        return strpos($string, $check) !== false;
        // return boolval(substr_count($string, $check));
    }
}

$string = 'Minha string bem legal!';

var_export(str_contains($string, '!'));
var_export(str_contains('tiago@minhaempresa.com.br', '@minhaempresa.com'));
// var_export(str_ends_with('tiago@minhaempresa.com', '@minhaempresa.com'));


echo str_repeat(PHP_EOL, 20);
