<?php

$preco = 150.90000;

// s -> strings
// f -> floats
// d -> inteiros

// sprintf('Saldo: R$ %.4f', $preco);
// sprintf('O valor do produto é %.2f reais', $preco);
// sprintf('O valor do produto é %s %.2f', 'R$', $preco);

// sprintf(
//     'Par 1: %s, Par 2: %s, Par 3: %s, Par 4: %s, ',
//     'abc',
//     'xyz',
//     '123',
//     true,
// );

$valorInteiro = sprintf('%d', $preco);
$valorFloat = sprintf('%.0f', $preco);
$valorFloat2 = sprintf('%.2f', $preco);

echo $valorInteiro . PHP_EOL;
echo $valorFloat . PHP_EOL;
echo $valorFloat2 . PHP_EOL;
