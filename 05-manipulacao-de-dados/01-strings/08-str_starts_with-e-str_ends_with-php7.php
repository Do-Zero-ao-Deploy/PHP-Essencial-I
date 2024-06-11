<?php

echo 'PHP_VERSION: ' . PHP_VERSION . PHP_EOL;

$string = 'A raposa preguiçosa pulou a cerca';

if (!function_exists('str_starts_with')) {
    function str_starts_with(string $string, string $check) {
        return substr($string, 0, strlen($check)) === $check;
    }
}

if (!function_exists('str_ends_with')) {
    function str_ends_with(string $string, string $check) {
        return substr($string, -strlen($check)) === $check;
    }
}

if (str_ends_with($string, 'cerca')) {
    echo "A string termina com 'cerca'\n";
}

if (str_ends_with($string, 'Cerca')) {
    echo "A string termina com 'Cerca'\n";
}

if (str_starts_with($string, 'A')) {
    echo "A string começa com 'A'\n";
}

if (str_starts_with($string, ' ')) {
    echo "A string começa com com um espaço\n";
}

if (str_starts_with($string, 'a')) {
    echo "A string começa com 'a'\n";
}
