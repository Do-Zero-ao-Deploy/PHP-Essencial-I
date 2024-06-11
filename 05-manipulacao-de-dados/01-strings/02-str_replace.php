<?php

$texto = <<<TEXTO
Olá {NOME},
Estamos entrando em contato para falarmos sobre seu plano {PLANO}.
Vimos que há {NUM_PARCELAS} parcela(s) em atrazo.

Se já fez o pagamento, por favor, ignore essa mensagem.
TEXTO;

echo "Original: |{$texto}|" . PHP_EOL . PHP_EOL;
echo str_repeat('-', 40) . PHP_EOL;

// $texto = str_replace('{NOME}', 'Tiago', $texto);
// $texto = str_replace('{PLANO}', 'Premium Anual', $texto);
// $texto = str_replace('{NUM_PARCELAS}', 1, $texto);

$replaces = [
    '{NUM_PARCELAS}' => 1,
    '{PLANO}' => 'Premium Anual',
    '{NOME}' => 'Tiago',
];

$texto = str_replace(
    array_keys($replaces),
    array_values($replaces),
    $texto,
);

echo "Modificado: |{$texto}|" . PHP_EOL;
echo str_repeat('-', 40) . PHP_EOL;

$texto = 'TOTAL alguma coisa [TOTAL] [total] outra coisa TOTAL';
echo "Original: |{$texto}|" . PHP_EOL . PHP_EOL;
echo str_repeat('-', 40) . PHP_EOL;

$count = 0;
$texto = str_replace('TOTAL', 15, $texto, $count);
echo "Modificado: |{$texto}|" . PHP_EOL;
echo "count: |{$count}|" . PHP_EOL;
