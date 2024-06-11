<?php

define('ITEM_1', 'Meu item 1');
const ITEM_2 = 'Meu item 2';

echo 'ITEM_1: ' . ITEM_1;

echo PHP_EOL;

echo 'ITEM_2: ' . ITEM_2;

echo PHP_EOL;

// define('ITEM_3', 'Valor antes');

if (!defined('ITEM_3')) {
    define('ITEM_3', 'Valor Dentro do IF');
}

// echo 'ITEM_3: ' . constant('ITEM_3');
echo 'ITEM_3: ' . ITEM_3;

echo PHP_EOL;
