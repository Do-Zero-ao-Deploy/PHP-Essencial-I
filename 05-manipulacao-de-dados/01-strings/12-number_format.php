<?php

$valor = '150.4500000';

// R$ 150,45

// $valor = explode('.', $valor);
// echo 'R$ ' . $valor[0] . ',' . str_pad(substr($valor[1] ?? '00',0 , 2), 2, '0');

echo 'R$ ' . number_format($valor, 2, ',', '.'); // Formato brasileiro BRL/Real
echo PHP_EOL;
echo '$ ' . number_format($valor, 2); // Formato americano USD/Dollar

echo PHP_EOL;

echo str_repeat(PHP_EOL, 10);
