<?php

echo 'str_replace' . PHP_EOL;
$texto = 'TOTAL alguma coisa [TOTAL] [total] outra coisa TOTAL';
echo "Original: |{$texto}|" . PHP_EOL . PHP_EOL;
echo str_repeat('-', 40) . PHP_EOL; // IGNORE ESSA LINHA

$count = 0;
$texto = str_replace('TOTAL', 15, $texto, $count);
echo "Modificado: |{$texto}|" . PHP_EOL;
echo "count: |{$count}|" . PHP_EOL;

echo str_repeat('-', 40) . PHP_EOL; // IGNORE ESSA LINHA
echo 'str_ireplace' . PHP_EOL;
$texto = 'TOTAL alguma coisa [TOTAL] [total] outra coisa TOTAL';
echo "Original: |{$texto}|" . PHP_EOL . PHP_EOL;
echo str_repeat('-', 40) . PHP_EOL; // IGNORE ESSA LINHA

$count = 0;
$texto = str_ireplace('TOTAL', 15, $texto, $count);
echo "Modificado: |{$texto}|" . PHP_EOL;
echo "count: |{$count}|" . PHP_EOL;
