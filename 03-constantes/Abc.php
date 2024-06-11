<?php

define('VALUES', 'Abc is a test'); // Ok! Funciona (Escopo global)

class Abc
{
    // define('VALUES', [1, 2, 3]); // Erro! Não funciona
    const VALUES = [1, 2, 3]; // Ok! Funciona (Escopo da classe)

    public function teste()
    {
        echo (defined('VALUES') ? 'Defined' : 'Not defined') . PHP_EOL;
        echo (defined('VALUES') ? VALUES : '') . PHP_EOL;
    }
}

$abc = new Abc();

$abc?->teste();
