<?php

$textoBase = '      meu texto aqui     ';


echo str_repeat('-', 60) . PHP_EOL;
echo PHP_EOL . 'Original:' . PHP_EOL;
echo PHP_EOL .'|' . $textoBase .'|'. PHP_EOL;

echo str_repeat('-', 60) . PHP_EOL;
echo PHP_EOL . 'trim()' . PHP_EOL;
echo PHP_EOL .'|' . trim($textoBase) .'|'. PHP_EOL;
echo str_repeat('-', 60) . PHP_EOL;

echo str_repeat('-', 60) . PHP_EOL;
echo PHP_EOL . 'ltrim()' . PHP_EOL;
echo PHP_EOL .'|' . ltrim($textoBase) .'|'. PHP_EOL;
echo str_repeat('-', 60) . PHP_EOL;

echo str_repeat('-', 60) . PHP_EOL;
echo PHP_EOL . 'rtrim()' . PHP_EOL;
echo PHP_EOL .'|' . rtrim($textoBase) .'|'. PHP_EOL;
echo str_repeat('-', 60) . PHP_EOL;

echo str_repeat('-', 60) . PHP_EOL;
echo PHP_EOL . 'chop()' . PHP_EOL;
echo PHP_EOL .'|' . chop($textoBase) .'|'. PHP_EOL;
echo str_repeat('-', 60) . PHP_EOL;

echo str_repeat('-', 60) . PHP_EOL;

echo trim(' meu site é incrível      ', ' Xxy|z'). PHP_EOL;

echo str_repeat('-', 60) . PHP_EOL;





































echo str_repeat(PHP_EOL, 30);
