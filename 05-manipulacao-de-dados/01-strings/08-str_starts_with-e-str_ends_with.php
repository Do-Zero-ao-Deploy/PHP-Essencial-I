<?php

$string = ' A raposa preguiçosa pulou a cerca';

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
