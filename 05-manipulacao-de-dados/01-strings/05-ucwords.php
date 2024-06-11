<?php

// ucfirst (upper case first) -> Deixa a primeira letra em caixa alta
// lcfirst (lower case first) -> Deixa a primeira letra em caixa baixa
// ucwords (upper case words) -> Deixa a primeira letra de cada palavra em caixa alta

echo PHP_EOL . str_repeat('-', 60) . PHP_EOL;

echo 'ucfirst: ' . ucfirst('meu texto aqui') . PHP_EOL;
echo 'lcfirst: ' . lcfirst('MEU TEXTO AQUI') . PHP_EOL;
echo 'ucwords: ' . ucwords('meu texto aqui') . PHP_EOL;
echo 'ucwords: ' . ucwords(strtolower('MEU TEXTO AQUI')) . PHP_EOL;
echo PHP_EOL . str_repeat('-', 60) . PHP_EOL;
