<?php

$file = __DIR__ . '/demo-text1.txt';
var_export($file .': ' . md5_file($file));
echo PHP_EOL;
echo PHP_EOL;

$file = __DIR__ . '/demo-text1-copy.txt';
var_export($file .': ' . md5_file($file));
echo PHP_EOL;
echo PHP_EOL;

$file = __DIR__ . '/demo-text2.txt';
var_export($file .': ' . md5_file($file));
echo PHP_EOL;
echo PHP_EOL;









echo str_repeat(PHP_EOL, 20);
